<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Kelompokmodels extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    /*
     * function menampilkan data groups users
     */
    function get_all_kelompok()
    {
        $this->db->order_by('id', 'asc');
        $query = $this->db->get('kelompok');
        return $query;
    }

    /*
     * function menampilkan data per id
     */
    function findbyid($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('kelompok');
        return $query->row_array();
    }

    /*
     * function menambahkan data kelompok
     */
    function insert($data)
    {
        $this->db->insert('kelompok', $data);
    }

    /*
     * function untuk mengganti data kelompok
     */
    function update($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('kelompok', $data);
    }

    /*
     * function menghapus data kelompok
     */
    function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('kelompok');
    }
}
