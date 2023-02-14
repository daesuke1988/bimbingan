<?php if (!defined('BASEPATH')) exit('No Direct script access allowed');
class Uploadmodels extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function get_all($tahun = null, $semester = null)
    {
        $group = $this->session->userdata('group_id');
        if ($group == '5') {
            $nim = $this->session->userdata('username');
            $this->db->where('nim', $nim);
        }
        if ($tahun) {
            $this->db->where('tahun', $tahun);
        }
        if ($semester) {
            $this->db->where('semester', $semester);
        }
        $this->db->order_by('id', 'desc');
        $query = $this->db->get('upload');
        return $query;
    }

    public function insert($data)
    {
        $this->db->insert('upload', $data);
        return @$this->db->insert_id();
    }

    public function update($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('upload', $data);
    }

    /*
     * function menghapus data pembayaran
     */
    function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('upload');
    }

    // menampilkan detail kerja praktek berdasarkan id
    function findbyid($id)
    {
        $this->db->where('kp.id', $id);
        $query = $this->db->get('upload kp');
        return $query->row_array();
    }

    /*
     * download file
     */
    function cekFile($id)
    {
        $this->db->from('upload');
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
        $this->db->select('image_cover,filename_cover');
        $this->db->from('upload');
        $this->db->where('id', $id);
        $data = $this->db->get();
        $row = $data->row();
        $data2['name'] = $row->filename_cover;
        $data2['full_path'] = $row->image_cover;
        return $data2;
    }

    function getFileInfo_pengesahan($id)
    {
        $this->db->select('image_pengesahan,filename_pengesahan');
        $this->db->from('upload');
        $this->db->where('id', $id);
        $data = $this->db->get();
        $row = $data->row();
        $data2['name'] = $row->filename_pengesahan;
        $data2['full_path'] = $row->image_pengesahan;
        return $data2;
    }
}
