<?php if (!defined('BASEPATH')) exit('No Direct script access allowed');
class Kerjapraktekmodels extends CI_Model
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
        $this->db->order_by('id_kp', 'ASC');
        $query = $this->db->get('v_bimbingan_dosen_kp');
        return $query;
    }

    function get_mhs()
    {
        $nim = $this->session->userdata('username');
        $query = $this->db->query("SELECT 
                    kp.id as id_kp, kp.nim, kp.nama, kp.judul, kp.lokasi, kp.tahun, kp.semester, kp.approv_kaprodi, kp.status_pendaftar,
                    concat(to_char(sk.tgl_awal, 'DD-MM-YYYY')||' s.d '||to_char(sk.tgl_akhir, 'DD-MM-YYYY')) as tanggal, to_char(sk.tgl_akhir, 'DD-MM-YYYY') as end,
                    case 
                    when status1='t' then concat(d1.gelar_depan||''||d1.nmdos||', '||d1.gelar_belakang)
			        when status2='t' then concat(d2.gelar_depan||''||d2.nmdos||', '||d2.gelar_belakang)
                        else 'dosen belum disetujui'
                    end as dosen, v_bimb.id_user, kp.approv_dosen
                FROM kerja_praktek kp
                LEFT JOIN pembimbing_kp pk ON pk.id_kp = kp.id
                LEFT JOIN dosen d1 ON d1.id = pk.id_dosen1
                LEFT JOIN dosen d2 ON d2.id = pk.id_dosen2
                LEFT JOIN ( SELECT max(sk_kerjapraktek.id) AS id_sk,
                        sk_kerjapraktek.id_kp
                    FROM sk_kerjapraktek
                    GROUP BY sk_kerjapraktek.id_kp) skp ON skp.id_kp = kp.id
                LEFT JOIN sk_kerjapraktek sk ON sk.id = skp.id_sk
                LEFT JOIN ( SELECT bk.id_kp,
                        bk.id_user
                    FROM bimbingan_kp bk
                        LEFT JOIN kerja_praktek kp ON kp.id = bk.id_kp
                    WHERE kp.approv_dosen IS NULL
                    ORDER BY bk.id DESC
                    LIMIT 1) v_bimb ON v_bimb.id_kp = kp.id
                WHERE kp.nim = '$nim' and kp.approv_kaprodi = 't' ORDER BY kp.id ASC");
        return $query;
    }

    function findbyidsk($id)
    {
        $query = $this->db->query("SELECT sk.id, sk.id_kp, sk.tgl_awal, to_char(tgl_akhir, 'DD-MM-YYYY') as end FROM sk_kerjapraktek sk
        JOIN(SELECT max(id) as id_sk, id_kp FROM sk_kerjapraktek GROUP BY id_kp) skp ON skp.id_sk = sk.id
        WHERE sk.id_kp = '$id'");
        return $query->row_array();
    }

    function detail($id_kp)
    {
        $this->db->where('id_kp', $id_kp);
        $query = $this->db->get('v_bimbingan_dosen_kp');
        return $query->row_array();
    }

    function get_dosen($tahun = null, $semester = null)
    {
        if ($tahun) {
            $this->db->where('tahun', $tahun);
        }
        if ($semester) {
            $this->db->where('semester', $semester);
        }
        $username = $this->session->userdata('username');
        $this->db->where('npp_dosen', $username);
        $this->db->order_by('id_kp', 'ASC');
        $query = $this->db->get('v_bimbingan_dosen_kp');
        return $query;
    }

    function insert($data)
    {
        $this->db->insert('bimbingan_kp', $data);
    }

    function update($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('bimbingan_kp', $data);
    }

    /*
     * function menghapus data user
     */
    function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('bimbingan_kp');
    }

    function bimbingan($id_kp)
    {
        $this->db->select('bk.id, bk.catatan, bk.image, bk.date, u.username, u.nama_lengkap, ug.group_id as role');
        $this->db->join('users u', 'u.id = bk.id_user', 'left');
        $this->db->join('users_groups ug', 'ug.user_id = u.id', 'left');
        $this->db->where('bk.id_kp', $id_kp);
        $this->db->order_by('bk.id', 'desc');
        $query = $this->db->get('bimbingan_kp bk');
        return $query;
    }

    // cetak bimbingan hanya bimbingan dari dosen yang tampil
    function cetak_bimbingan($id_kp)
    {
        $this->db->select('bk.id, bk.catatan, bk.image, bk.date, u.username, u.nama_lengkap, ug.group_id as role');
        $this->db->join('users u', 'u.id = bk.id_user', 'left');
        $this->db->join('users_groups ug', 'ug.user_id = u.id', 'left');
        $this->db->where('bk.id_kp', $id_kp);
        // $this->db->where('ug.group_id', '4');
        $this->db->order_by('bk.id', 'desc');
        $query = $this->db->get('bimbingan_kp bk');
        return $query;
    }

    function count_bimbingan($id_kp)
    {
        $query = $this->db->query("
            SELECT COUNT(id_kp) as total, v_bk.id_kp FROM
                        (SELECT 
                bk.id_kp, bk.date::TIMESTAMP::DATE
                FROM bimbingan_kp bk
                LEFT JOIN users u ON u.id = bk.id_user
                LEFT JOIN users_groups ug ON ug.user_id = u.id
                WHERE ug.group_id = 4
                GROUP BY bk.id_kp, bk.date::TIMESTAMP::DATE)v_bk
            where v_bk.id_Kp = '$id_kp'
            GROUP BY v_bk.id_kp
        ");
        return $query->row_array();
    }

    /*
     * download file
     */
    function cekFile($id)
    {
        $this->db->from('kerja_praktek');
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
        $this->db->from('bimbingan_kp');
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
        $this->db->from('kerja_praktek');
        $num = $this->db->count_all_results();
        if ($num == 0) {
            return FALSE;
        } else {
            return TRUE;
        }
    }

    function cetak_pdf($id_kp)
    {
        $query = $this->db->query("
            SELECT kp.id as id_kp, kp.nim, kp.nama, kp.judul, kp.lokasi, kp.tahun, kp.semester, kp.approv_kaprodi, kp.status_pendaftar,
                case 
                    when status1='t' then concat(d1.gelar_depan||''||d1.nmdos||', '||d1.gelar_belakang)
                    when status2='t' then concat(d2.gelar_depan||''||d2.nmdos||', '||d2.gelar_belakang)
                            else 'dosen belum disetujui'
                end as dosen, p.nama as nm_prodi
            FROM kerja_praktek kp
            LEFT JOIN pembimbing_kp pk ON pk.id_kp = kp.id
            LEFT JOIN dosen d1 ON d1.id = pk.id_dosen1
            LEFT JOIN dosen d2 ON d2.id = pk.id_dosen2
            LEFT JOIN mhs m ON m.nim = kp.nim
            LEFT JOIN prodi p ON p.id = m.kdpst
            WHERE kp.id = '$id_kp' ORDER BY kp.id ASC
        ");

        return $query->row_array();
    }
}
