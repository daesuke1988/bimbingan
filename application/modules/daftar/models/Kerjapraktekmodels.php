<?php if (!defined('BASEPATH')) exit('No Direct script access allowed');
class Kerjapraktekmodels extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function pend_kp()
    {
        $this->db->where('approv_kaprodi IS NULL');
        $this->db->or_where('approv_kaprodi', false);
        $this->db->order_by('id', 'desc');
        $query = $this->db->get('kerja_praktek');
        return $query;
    }

    function pend_kp_mhs($nim)
    {
        $this->db->where('nim', $nim);
        $this->db->where('approv_kaprodi IS NULL');
        $this->db->or_where('approv_kaprodi', false);
        $this->db->order_by('id', 'desc');
        $query = $this->db->get('kerja_praktek');
        return $query;
    }

    public function insert($data)
    {
        $this->db->insert('kerja_praktek', $data);
        return @$this->db->insert_id();
    }

    public function update($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('kerja_praktek', $data);
    }

    function insert_dosen_pembimbing($data)
    {
        $this->db->insert('pembimbing_kp', $data);
    }

    function update_dosen_pembimbing($id, $data)
    {
        $this->db->where('id_kp', $id);
        $this->db->update('pembimbing_kp', $data);
    }

    function insert_file_kp($data)
    {
        $this->db->insert('file_kp', $data);
    }

    function isjudulExists($judul)
    {
        $this->db->where("judul ilike '$judul'");
        $this->db->from('kerja_praktek');
        $num = $this->db->count_all_results();
        if ($num == 0) {
            return FALSE;
        } else {
            return TRUE;
        }
    }

    // function success_pengajuan($nim)
    // {
    //     $this->db->select('d1.nama as nm_dosen1, d2.nama as nm_dosen2, kp.id as id_kp, kp.judul, kp.lokasi, kp.alamat_kp, kp.alamat_dihub, kp.tahun, kp.semester, kp.telpon, kp.image');
    //     $this->db->join('pembimbing_kp pk', 'pk.id_kp = kp.id', 'left');
    //     $this->db->join('dosen d1', 'd1.id = pk.id_dosen1', 'left');
    //     $this->db->join('dosen d2', 'd2.id = pk.id_dosen2', 'left');
    //     $this->db->where('kp.id', $nim);
    //     $this->db->where('kp.approv_kaprodi');
    //     $query = $this->db->get('kerja_praktek kp');
    //     return $query->row_array();
    // }

    // menampilkan detail kerja praktek berdasarkan id
    function findbyid($id)
    {
        $this->db->select('kp.nim, d1.nmdos as nm_dosen1, d2.nmdos as nm_dosen2, kp.id as id_kp, kp.judul, kp.lokasi, kp.alamat_kp, kp.alamat_dihub, kp.tahun, kp.semester, kp.telpon, pk.id_dosen1, pk.id_dosen2, kp.image');
        $this->db->join('pembimbing_kp pk', 'pk.id_kp = kp.id', 'left');
        $this->db->join('dosen d1', 'd1.id = pk.id_dosen1', 'left');
        $this->db->join('dosen d2', 'd2.id = pk.id_dosen2', 'left');
        $this->db->where('kp.id', $id);
        $query = $this->db->get('kerja_praktek kp');
        return $query->row_array();
    }

    /*
    * menampilkan detail dokumen pendukung
    */
    function find_id_file($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('kerja_praktek');
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
        $this->db->from('kerja_praktek');
        $this->db->where('id', $id);
        $data = $this->db->get();
        $row = $data->row();
        $data2['name'] = $row->filename;
        $data2['full_path'] = $row->image;
        return $data2;
    }

    function cek_kp($nim)
    {
        $this->db->select('nim, tahun, semester, tgl_awal, tgl_akhir');
        $this->db->join('sk_kerjapraktek sk', 'sk.id_kp = kp.id', 'left');
        $this->db->where('nim', $nim);
        $this->db->order_by('kp.id', 'desc');
        $this->db->limit(1);
        $query = $this->db->get('kerja_praktek kp');
        return $query->row_array();
    }

    // insert sk kp
    function insert_sk_kp($data)
    {
        $this->db->insert('sk_kerjapraktek', $data);
    }
}
