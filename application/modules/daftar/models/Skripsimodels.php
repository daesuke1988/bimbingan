<?php if (!defined('BASEPATH')) exit('No Direct script access allowed');
class Skripsimodels extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function pend_skripsi()
    {
        $this->db->where('approv_kaprodi IS NULL');
        $this->db->or_where('approv_kaprodi', false);
        $this->db->order_by('id', 'desc');
        $query = $this->db->get('skripsi');
        return $query;
    }

    function pend_skripsi_mhs($nim)
    {
        $this->db->where('nim', $nim);
        $this->db->where('approv_kaprodi IS NULL');
        $this->db->or_where('approv_kaprodi', false);
        $this->db->order_by('id', 'desc');
        $query = $this->db->get('skripsi');
        return $query;
    }

    public function insert($data)
    {
        $this->db->insert('skripsi', $data);
        return @$this->db->insert_id();
    }

    public function update($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('skripsi', $data);
    }

    function insert_dosen_pembimbing($data)
    {
        $this->db->insert('pembimbing_skripsi', $data);
    }

    function update_dosen_pembimbing($id, $data)
    {
        $this->db->where('id_skripsi', $id);
        $this->db->update('pembimbing_skripsi', $data);
    }

    function insert_file_skripsi($data)
    {
        $this->db->insert('file_skripsi', $data);
    }

    function isjudulExists($judul)
    {
        $this->db->where("judul ilike '$judul'");
        $this->db->from('skripsi');
        $num = $this->db->count_all_results();
        if ($num == 0) {
            return FALSE;
        } else {
            return TRUE;
        }
    }

    // menampilkan detail kerja praktek berdasarkan id
    function findbyid($id)
    {
        $this->db->select('kp.nim, d1.nama as nm_dosen1, d2.nama as nm_dosen2, kp.id as id_skripsi, kp.judul, kp.tahun, kp.semester, kp.telpon, pk.id_dosen1, pk.id_dosen2, kp.image_syarat, kp.image_proposal, kp.status_pendaftar');
        $this->db->join('pembimbing_skripsi pk', 'pk.id_skripsi = kp.id', 'left');
        $this->db->join('dosen d1', 'd1.id = pk.id_dosen1', 'left');
        $this->db->join('dosen d2', 'd2.id = pk.id_dosen2', 'left');
        $this->db->where('kp.id', $id);
        $query = $this->db->get('skripsi kp');
        return $query->row_array();
    }

    /*
    * menampilkan detail dokumen pendukung
    */
    function find_id_file($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('skripsi');
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
        $this->db->select('image_syarat,filename_syarat');
        $this->db->from('skripsi');
        $this->db->where('id', $id);
        $data = $this->db->get();
        $row = $data->row();
        $data2['name'] = $row->filename_syarat;
        $data2['full_path'] = $row->image_syarat;
        return $data2;
    }

    function getFileInfo_proposal($id)
    {
        $this->db->select('image_proposal,filename_proposal');
        $this->db->from('skripsi');
        $this->db->where('id', $id);
        $data = $this->db->get();
        $row = $data->row();
        $data2['name'] = $row->filename_proposal;
        $data2['full_path'] = $row->image_proposal;
        return $data2;
    }

    function cek_skripsi($nim)
    {
        $this->db->select('nim, tahun, semester, tgl_awal, tgl_akhir, approv_kaprodi');
        $this->db->join('sk_skripsi sk', 'sk.id_skripsi = kp.id', 'left');
        $this->db->where('nim', $nim);
        $this->db->order_by('kp.id', 'desc');
        $this->db->limit(1);
        $query = $this->db->get('skripsi kp');
        return $query->row_array();
    }

    // insert sk skripsi
    function insert_sk_skripsi($data)
    {
        $this->db->insert('sk_skripsi', $data);
    }
}
