<?php if (!defined('BASEPATH')) exit('No Direct script access allowed');
class Kklmodels extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function pend_kkl_individu()
    {
        $this->db->where('kategori', 'i');
        $this->db->where('(approv_wakademik IS NULL or approv_wakademik = false)');
        $this->db->order_by('id', 'desc');
        $query = $this->db->get('kkl');
        return $query;
    }

    function pend_kkl_kelompok()
    {
        $this->db->where('kategori', 'k');
        $this->db->where('(approv_wakademik IS NULL or approv_wakademik = false)');
        $this->db->order_by('id', 'desc');
        $query = $this->db->get('kkl');
        return $query;
    }

    function pend_kkl_mhs($nim)
    {
        $this->db->where('nim', $nim);
        $this->db->where('approv_wakademik IS NULL');
        $this->db->or_where('approv_wakademik', false);
        $this->db->order_by('id', 'desc');
        $query = $this->db->get('kkl');
        return $query;
    }

    public function insert($data)
    {
        $this->db->insert('kkl', $data);
        return @$this->db->insert_id();
    }

    public function update($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('kkl', $data);
    }

    function insert_dosen_pembimbing($data)
    {
        $this->db->insert('pembimbing_kkl', $data);
    }

    function update_dosen_pembimbing($id, $data)
    {
        $this->db->where('id_kkl', $id);
        $this->db->update('pembimbing_kkl', $data);
    }

    function insert_file_kkl($data)
    {
        $this->db->insert('file_kkl', $data);
    }

    function isjudulExists($judul)
    {
        $this->db->where("judul ilike '$judul'");
        $this->db->from('kkl');
        $num = $this->db->count_all_results();
        if ($num == 0) {
            return FALSE;
        } else {
            return TRUE;
        }
    }

    // function success_pengajuan($nim)
    // {
    //     $this->db->select('d1.nama as nm_dosen1, d2.nama as nm_dosen2, kp.id as id_kkl, kp.judul, kp.lokasi, kp.alamat_kkl, kp.alamat_dihub, kp.tahun, kp.semester, kp.telpon, kp.image');
    //     $this->db->join('pembimbing_kkl pk', 'pk.id_kkl = kp.id', 'left');
    //     $this->db->join('dosen d1', 'd1.id = pk.id_dosen1', 'left');
    //     $this->db->join('dosen d2', 'd2.id = pk.id_dosen2', 'left');
    //     $this->db->where('kp.id', $nim);
    //     $this->db->where('kp.approv_wakademik');
    //     $query = $this->db->get('kkl kp');
    //     return $query->row_array();
    // }

    // menampilkan detail kerja praktek berdasarkan id
    function findbyid($id)
    {
        $this->db->where('kp.id', $id);
        $query = $this->db->get('kkl kp');
        return $query->row_array();
    }

    /*
    * menampilkan detail dokumen pendukung
    */
    function find_id_file($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('kkl');
        return $query->row_array();
    }

    /*
     * download file
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

    function cek_kkl($nim)
    {
        $this->db->select('nim, tahun, semester');
        // $this->db->join('sk_kkl sk', 'sk.id_kkl = kp.id', 'left');
        $this->db->where('nim', $nim);
        $this->db->order_by('kp.id', 'desc');
        $this->db->limit(1);
        $query = $this->db->get('kkl kp');
        return $query->row_array();
    }

    function cek_kkl_individu($nim)
    {
        $this->db->select('nim, tahun, semester, tgl_awal, tgl_akhir');
        $this->db->join('pembimbing_kkl sk', 'sk.id_kkl = kp.id', 'left');
        $this->db->where('nim', $nim);
        $this->db->order_by('kp.id', 'desc');
        $this->db->limit(1);
        $query = $this->db->get('kkl kp');
        return $query->row_array();
    }

    function cek_kkl_kelompok($nim)
    {
        $this->db->select('kkl.nim, kkl.tahun, kkl.semester, tgl_awal, tgl_akhir');
        $this->db->join('kelompok_mhs km', 'km.id_kkl = kkl.id', 'left');
        $this->db->join('kelompok_kkl kk', 'kk.id = km.id_kelompok_kkl', 'left');
        $this->db->where('kkl.nim', $nim);
        $this->db->order_by('kkl.id', 'desc');
        $this->db->limit(1);
        $query = $this->db->get('kkl');
        return $query->row_array();
    }

    // insert sk kp
    function insert_kelompok_kkl($data)
    {
        $this->db->insert('kelompok_kkl', $data);
        return @$this->db->insert_id();
    }

    // cari kelompok kkl berdasar kelas dan tahun
    function findKelompok($id_kelompok, $tahun, $semester)
    {
        $this->db->where('id_kelompok', $id_kelompok);
        $this->db->where('tahun', $tahun);
        $this->db->where('semester', $semester);
        $query = $this->db->get('kelompok_kkl');
        return $query->row_array();
    }

    // view kelompok mhs
    function viewKelompok($nim)
    {
        $this->db->select('km.id_kkl, k.nama as nm_kelompok, km.ketua');
        $this->db->join('kelompok_kkl kl', 'kl.id = km.id_kelompok_kkl');
        $this->db->join('kelompok k', 'k.id = kl.id_kelompok');
        $this->db->where('nim', $nim);
        $query = $this->db->get('kelompok_mhs km');
        return $query->row_array();
    }
}
