<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Dosenmodels extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    /*
     * function menampilkan data dosen users
     */
    function get_all()
    {
        $this->db->order_by('id', 'asc');
        $query = $this->db->get('dosen');
        return $query;
    }

    /*
     * function menampilkan data per id
     */
    function findbyid($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('dosen');
        return $query->row_array();
    }

    /*
     * function menambahkan data dosen
     */
    function insert($data)
    {
        $this->db->insert('dosen', $data);
    }

    /*
     * function untuk mengganti data dosen
     */
    function update($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('dosen', $data);
    }

    /*
     * function menghapus data dosen
     */
    function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('dosen');
    }
}
