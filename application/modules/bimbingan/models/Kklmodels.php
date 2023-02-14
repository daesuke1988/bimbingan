<?php if (!defined('BASEPATH')) exit('No Direct script access allowed');
class Kklmodels extends CI_Model
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

        $this->db->order_by('id_kkl', 'ASC');
        $query = $this->db->get('v_bimbingan_dosen_kkl');
        return $query;
    }


    function get_mhs()
    {
        $nim = $this->session->userdata('username');
        $this->db->where('nim', $nim);
        $query = $this->db->get('v_bimbingan_dosen_kkl');
        return $query;
    }

    function get_mhs_kelompok()
    {
        $nim = $this->session->userdata('username');
        $this->db->where('nim', $nim);
        $query = $this->db->get('v_bimbingan_mhs_kelompok_kkl');
        return $query;
    }

    function findbyidsk($id)
    {
        $this->db->select("to_char(tgl_akhir, 'DD-MM-YYYY') as end");
        $this->db->where('id_kkl', $id);
        $query = $this->db->get('pembimbing_kkl');
        return $query->row_array();
    }

    function detail($id_kkl)
    {
        $this->db->where('id_kkl', $id_kkl);
        $query = $this->db->get('v_bimbingan_dosen_kkl');
        return $query->row_array();
    }

    function get_dosen($tahun = null, $semester = null)
    {
        $username = $this->session->userdata('username');
        if ($tahun) {
            $this->db->where('tahun', $tahun);
        }
        if ($semester) {
            $this->db->where('semester', $semester);
        }
        $this->db->where('npp_dosen', $username);
        $this->db->order_by('id_kkl', 'ASC');
        $query = $this->db->get('v_bimbingan_dosen_kkl');
        return $query;
    }

    function insert_individu($data)
    {
        $this->db->insert('bimbingan_kkl_individu', $data);
    }

    function update_individu($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('bimbingan_kkl_individu', $data);
    }

    /*
     * function menghapus data user
     */
    function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('bimbingan_kkl_individu');
    }



    function bimbingan_individu($id_kkl)
    {
        $this->db->select('bk.id, bk.catatan, bk.image, bk.date, u.username, u.nama_lengkap, ug.group_id as role');
        $this->db->join('users u', 'u.id = bk.id_user', 'left');
        $this->db->join('users_groups ug', 'ug.user_id = u.id', 'left');
        $this->db->where('bk.id_kkl', $id_kkl);
        $this->db->order_by('bk.id', 'desc');
        $query = $this->db->get('bimbingan_kkl_individu bk');
        return $query;
    }

    /*
     * download file kkl
     */
    function cekFile($id)
    {
        $this->db->from('kkl');
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
        $this->db->from('kkl');
        $this->db->where('id', $id);
        $data = $this->db->get();
        $row = $data->row();
        $data2['name'] = $row->filename;
        $data2['full_path'] = $row->image;
        return $data2;
    }

    /*
     * download file bimbingan kkl individu
     */
    function cekFile_individu($id)
    {
        $this->db->from('bimbingan_kkl_individu');
        $this->db->where('id', $id);
        $data = $this->db->get();
        if ($data->num_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    function getFileInfo_individu($id)
    {
        $this->db->select('image,filename');
        $this->db->from('bimbingan_kkl_individu');
        $this->db->where('id', $id);
        $data = $this->db->get();
        $row = $data->row();
        $data2['name'] = $row->filename;
        $data2['full_path'] = $row->image;
        return $data2;
    }


    function detail_kkl_individu($id_kkl)
    {
        $query = $this->db->query("
            SELECT kkl.id as id_kkl, kkl.nim, kkl.nama, kkl.judul, kkl.lokasi, kkl.alamat_kkl, kkl.kelas, kkl.telpon, kkl.tahun, kkl.semester, kkl.approv_wakademik,
                CASE
                    WHEN pk.id_dosen IS NOT NULL THEN concat((((d.gelar_depan::text || ''::text) || d.nmdos::text) || ', '::text) || d.gelar_belakang::text)
                    ELSE 'dosen belum diset'::text
            END AS dosen,
            CASE
                    WHEN pk.id_dosen IS NOT NULL THEN nodos
                    ELSE 'dosen belum diset'::text
            END AS npp_dosen,
            p.nama as nm_prodi
            FROM kkl
            LEFT JOIN pembimbing_kkl pk ON pk.id_kkl = kkl.id
            LEFT JOIN dosen d ON d.id = pk.id_dosen
            LEFT JOIN mhs m ON m.nim = kkl.nim
            LEFT JOIN prodi p ON p.id = m.kdpst
            WHERE kkl.kategori = 'i' AND kkl.id = '$id_kkl' ORDER BY kkl.id ASC
        ");

        return $query->row_array();
    }

    // cek approv dosen pembimbing
    function cek_approv_individu($id_kkl)
    {
        $this->db->where('id_kkl', $id_kkl);
        $this->db->where('approv_dosen', true);
        $this->db->from('pembimbing_kkl');
        $num = $this->db->count_all_results();
        if ($num == 0) {
            return FALSE;
        } else {
            return TRUE;
        }
    }

    // menampilkan jumlah bimbingan individu
    function count_bimbingan_individu($id_kkl_individu)
    {
        $query = $this->db->query("
            SELECT count(v_bk.id_kkl) AS total, v_bk.id_kkl
            FROM ( SELECT count(bk.id) AS jml_bimbingan,
                        bk.id_kkl
                    FROM bimbingan_kkl_individu bk
                        LEFT JOIN users u ON u.id = bk.id_user
                        LEFT JOIN users_groups ug ON ug.user_id = u.id
                    WHERE ug.group_id = 4 AND bk.id_kkl = '$id_kkl_individu'
                    GROUP BY bk.id_kkl, bk.date) v_bk
            GROUP BY v_bk.id_kkl
        ");
        return $query->row_array();
    }
    // ================== kelompok =======================
    // menampilkan daftar kelompok kkl
    function get_all_kelompok($tahun = null, $semester = null)
    {
        if ($tahun) {
            $this->db->where('tahun', $tahun);
        }
        if ($semester) {
            $this->db->where('semester', $semester);
        }
        $this->db->order_by("concat(tahun||''||semester)", 'DESC');
        $this->db->order_by('id_kelompok_kkl', 'ASC');
        $query = $this->db->get('v_bimbingan_dosen_kkl_kelompok');
        return $query;
    }

    // menampilkan daftar kelompok
    function daftar_peserta($id_kelompok_kkl)
    {
        $this->db->select('kkl.id AS id_kkl, kkl.nim, kkl.nama, kkl.judul, kkl.lokasi, kkl.alamat_kkl, kkl.alamat_dihub, kkl.image, kkl.telpon, kkl.tahun, kkl.semester, kkl.approv_wakademik, km.ketua');
        $this->db->join('kelompok_mhs km', 'km.id_kkl = kkl.id', 'left');
        $this->db->where('id_kelompok_kkl', $id_kelompok_kkl);
        $this->db->where('kkl.approv_wakademik = true');
        $this->db->order_by('kkl.nim', 'ASC');
        $query = $this->db->get('kkl');
        return $query;
    }

    // menampilakan kelompok berdasakan id kelompok
    function findbyidkelompok($id_kelompok)
    {
        $this->db->where('id_kelompok_kkl', $id_kelompok);
        $query = $this->db->get('v_bimbingan_dosen_kkl_kelompok');
        return $query->row_array();
    }

    // insert dosen pembimbing
    function set_dosen($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('kelompok_kkl', $data);
    }

    // find tanggal sk by id
    function findbyid_kelompok_kkl($id)
    {
        $this->db->select("to_char(tgl_akhir, 'DD-MM-YYYY') as end");
        $this->db->where('id', $id);
        $query = $this->db->get('kelompok_kkl');
        return $query->row_array();
    }

    // insert bimbingan kelompok
    function insert_kelompok($data)
    {
        $this->db->insert('bimbingan_kkl_kelompok', $data);
    }

    // menampilkan bimbingan kelompok
    function bimbingan_kelompok($id_kelompok_kkl)
    {
        $this->db->select('bk.id as id_bimbingan_kelompok, bk.catatan, bk.image, bk.date, bk.id_kategori, u.id as id_user, u.username, u.nama_lengkap, ug.group_id as role');
        $this->db->join('users u', 'u.id = bk.id_user', 'left');
        $this->db->join('users_groups ug', 'ug.user_id = u.id', 'left');
        $this->db->where('bk.id_kelompok_kkl', $id_kelompok_kkl);
        $this->db->order_by('bk.id', 'desc');
        $query = $this->db->get('bimbingan_kkl_kelompok bk');
        return $query;
    }

    // menampilkan bimbingan kelompok berdasarkan dosen
    function get_dosen_kelompok($tahun = null, $semester = null)
    {
        $username = $this->session->userdata('username');
        if ($tahun) {
            $this->db->where('tahun', $tahun);
        }
        if ($semester) {
            $this->db->where('semester', $semester);
        }
        $this->db->where('npp_dosen', $username);
        $this->db->order_by("concat(tahun||''||semester)", 'DESC');
        $this->db->order_by('id_kelompok_kkl', 'ASC');
        $query = $this->db->get('v_bimbingan_dosen_kkl_kelompok');
        return $query;
    }

    // menambahkan komentar
    function insert_komentar($data)
    {
        $this->db->insert('komentar_bimbingan_kelompok', $data);
    }

    // menampilkan komentar berdasarkan id kelompok kkl
    function find_komentar($id_bimbingan_kkl_kelompok)
    {
        $this->db->select('u.nama_lengkap, bk.komentar, bk.date');
        $this->db->join('users u', 'u.id = bk.id_user', 'left');
        $this->db->where('bk.id_bimbingan_kkl_kelompok', $id_bimbingan_kkl_kelompok);
        $this->db->order_by('bk.id', 'asc');
        $query = $this->db->get('komentar_bimbingan_kelompok bk');
        return $query;
    }

    // menampilkan sk kelompok berdasarkan tahun
    function cetak_sk_kelompok($tahun = null, $semester = null)
    {
        if ($tahun) {
            $this->db->where('tahun', $tahun);
        }
        if ($semester) {
            $this->db->where('semester', $semester);
        }
        $query = $this->db->get('v_bimbingan_mhs_kelompok_kkl');
        return $query;
    }

    // function sk kelompok berdasarkan id kelompok
    function cetak_sk_kelompok_per_id($id_kelompok_kkl)
    {
        $this->db->where('id_kelompok_kkl', $id_kelompok_kkl);
        $query = $this->db->get('v_bimbingan_mhs_kelompok_kkl');
        return $query;
    }

    /*
     * download file bimbingan kkl kelompok
     */
    function cekFile_kelompok($id)
    {
        $this->db->from('bimbingan_kkl_kelompok');
        $this->db->where('id', $id);
        $data = $this->db->get();
        if ($data->num_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    function getFileInfo_kelompok($id)
    {
        $this->db->select('image,filename');
        $this->db->from('bimbingan_kkl_kelompok');
        $this->db->where('id', $id);
        $data = $this->db->get();
        $row = $data->row();
        $data2['name'] = $row->filename;
        $data2['full_path'] = $row->image;
        return $data2;
    }

    // cek approv dosen pembimbing
    function cek_approv_kelompok($id_kelompok_kkl)
    {
        $this->db->where('id', $id_kelompok_kkl);
        $this->db->where('approv_dosen', true);
        $this->db->from('kelompok_kkl');
        $num = $this->db->count_all_results();
        if ($num == 0) {
            return FALSE;
        } else {
            return TRUE;
        }
    }

    // menampilkan jumlah bimbingan kelimpok
    function count_bimbingan_kelompok($id_kelompok_kkl)
    {
        $query = $this->db->query("
            SELECT COUNT(id_kelompok_kkl) as total, v_bk.id_kelompok_kkl FROM
                (SELECT bk.id_kelompok_kkl, bk.date
                FROM bimbingan_kkl_kelompok bk
                LEFT JOIN users u ON u.id = bk.id_user
                LEFT JOIN users_groups ug ON ug.user_id = u.id
                WHERE ug.group_id = 4 and bk.id_kelompok_kkl = '$id_kelompok_kkl'
                GROUP BY bk.id_kelompok_kkl, bk.date)v_bk
            GROUP BY v_bk.id_kelompok_kkl
        ");
        return $query->row_array();
    }
}
