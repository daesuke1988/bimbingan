<?php if (!defined('BASEPATH')) exit('No Direct script access allowed');
class Skripsimodels extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function get_all($tahun = null, $semester = null)
    {
        if ($tahun) {
            $this->db->where('tahun', $tahun);
        }
        if ($semester) {
            $this->db->where('semester', $semester);
        }
        $this->db->order_by('id_skripsi', 'ASC');
        $query = $this->db->get('v_bimbingan_dosen_skripsi');
        return $query;
    }

    function get_mhs()
    {
        $nim = $this->session->userdata('username');
        $query = $this->db->query("
            SELECT 
                s.id as id_skripsi, s.nim, s.nama, s.judul, s.tahun, s.semester, s.approv_kaprodi, s.approv_dosen, s.status_pendaftar,
                concat(to_char(sk.tgl_awal, 'DD-MM-YYYY')||' s.d '||to_char(sk.tgl_akhir, 'DD-MM-YYYY')) as tanggal, to_char(sk.tgl_akhir, 'DD-MM-YYYY') as end,
                case 
                when status1='t' then concat(d1.gelar_depan||''||d1.nmdos||', '||d1.gelar_belakang)
                when status2='t' then concat(d2.gelar_depan||''||d2.nmdos||', '||d2.gelar_belakang)
                        else 'dosen belum disetujui'
                end as dosen, v_bimb.id_user
            FROM skripsi s
            LEFT JOIN pembimbing_skripsi pk ON pk.id_skripsi = s.id
            LEFT JOIN dosen d1 ON d1.id = pk.id_dosen1
            LEFT JOIN dosen d2 ON d2.id = pk.id_dosen2
            LEFT JOIN ( SELECT max(sk_skripsi.id) AS id_sk, sk_skripsi.id_skripsi
                FROM sk_skripsi
                GROUP BY sk_skripsi.id_skripsi) skp ON skp.id_skripsi = s.id
            LEFT JOIN sk_skripsi sk ON sk.id = skp.id_sk
            LEFT JOIN (
                SELECT bs.id_skripsi, bs.id_user
                FROM bimbingan_skripsi bs
                LEFT JOIN skripsi s ON s.id = bs.id_skripsi
                WHERE s.approv_dosen IS NULL
                ORDER BY bs.id DESC
                LIMIT 1
            ) v_bimb ON v_bimb.id_skripsi = s.id
            WHERE s.nim = '$nim' and s.approv_kaprodi = 't' ORDER BY s.id ASC
        ");
        return $query;
    }

    function findbyidsk($id)
    {
        $this->db->select("to_char(tgl_akhir, 'DD-MM-YYYY') as end");
        $this->db->where('id_skripsi', $id);
        $query = $this->db->get('sk_skripsi');
        return $query->row_array();
    }

    function detail($id_skripsi)
    {
        $this->db->where('id_skripsi', $id_skripsi);
        $query = $this->db->get('v_bimbingan_dosen_skripsi');
        return $query->row_array();
    }

    function get_dosen()
    {
        $username = $this->session->userdata('username');
        $this->db->where('npp_dosen', $username);
        $this->db->order_by('id_skripsi', 'ASC');
        $query = $this->db->get('v_bimbingan_dosen_skripsi');
        return $query;
    }

    function insert($data)
    {
        $this->db->insert('bimbingan_skripsi', $data);
    }

    function update($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('bimbingan_skripsi', $data);
    }

    /*
     * function menghapus data user
     */
    function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('bimbingan_skripsi');
    }

    function bimbingan($id_skripsi)
    {
        $this->db->select('bk.id, bk.catatan, bk.image, bk.date, u.username, u.nama_lengkap, ug.group_id as role');
        $this->db->join('users u', 'u.id = bk.id_user', 'left');
        $this->db->join('users_groups ug', 'ug.user_id = u.id', 'left');
        $this->db->where('bk.id_skripsi', $id_skripsi);
        $this->db->where('ug.group_id', '4');
        $this->db->order_by('bk.id', 'desc');
        $query = $this->db->get('bimbingan_skripsi bk');
        return $query;
    }

    // cetak bimbingan hanya bimbingan dari dosen yang tampil
    function cetak_bimbingan($id_skripsi)
    {
        $this->db->select('bk.id, bk.catatan, bk.image, bk.date, u.username, u.nama_lengkap, ug.group_id as role');
        $this->db->join('users u', 'u.id = bk.id_user', 'left');
        $this->db->join('users_groups ug', 'ug.user_id = u.id', 'left');
        $this->db->where('bk.id_skripsi', $id_skripsi);
        // $this->db->where('ug.group_id', '4');
        $this->db->order_by('bk.id', 'desc');
        $query = $this->db->get('bimbingan_skripsi bk');
        return $query;
    }

    function count_bimbingan($id_skripsi)
    {
        $this->db->select('COUNT(bk.id) as total');
        $this->db->join('users u', 'u.id = bk.id_user', 'left');
        $this->db->join('users_groups ug', 'ug.user_id = u.id', 'left');
        $this->db->where('bk.id_skripsi', $id_skripsi);
        // $this->db->where('ug.group_id', '4');
        $query = $this->db->get('bimbingan_skripsi bk');
        return $query->row_array();
    }

    /*
     * download file
     */
    function cekFile($id)
    {
        $this->db->from('skripsi');
        $this->db->where('id', $id);
        $data = $this->db->get();
        if ($data->num_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    function getFileInfo($id)
    {
        $this->db->select('image,filename');
        $this->db->from('bimbingan_skripsi');
        $this->db->where('id', $id);
        $data = $this->db->get();
        $row = $data->row();
        $data2['name'] = $row->filename;
        $data2['full_path'] = $row->image;
        return $data2;
    }

    // cek approv dosen pembimbing
    function cek_approv($id)
    {
        $this->db->where('id', $id);
        $this->db->where('approv_dosen', true);
        $this->db->from('skripsi');
        $num = $this->db->count_all_results();
        if ($num == 0) {
            return FALSE;
        } else {
            return TRUE;
        }
    }

    function cetak_pdf($id_skripsi)
    {
        $query = $this->db->query("
            SELECT kp.id as id_skripsi, kp.nim, kp.nama, kp.judul, kp.tahun, kp.semester, kp.approv_kaprodi, kp.status_pendaftar,
                case 
                    when status1='t' then concat(d1.gelar_depan||''||d1.nmdos||', '||d1.gelar_belakang)
                    when status2='t' then concat(d2.gelar_depan||''||d2.nmdos||', '||d2.gelar_belakang)
                            else 'dosen belum disetujui'
                end as dosen, p.nama as nm_prodi
            FROM skripsi kp
            LEFT JOIN pembimbing_skripsi pk ON pk.id_skripsi = kp.id
            LEFT JOIN dosen d1 ON d1.id = pk.id_dosen1
            LEFT JOIN dosen d2 ON d2.id = pk.id_dosen2
            LEFT JOIN mhs m ON m.nim = kp.nim
            LEFT JOIN prodi p ON p.id = m.kdpst
            WHERE kp.id = '$id_skripsi' ORDER BY kp.id ASC
        ");

        return $query->row_array();
    }
}
