<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: kresna
 * Date: 8/30/2015
 * Time: 11:21 AM
 */
class functions_models extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    /*
     * menampilkan data fungsi yang ada
     */
    function get_all_function()
    {
        $this->db->order_by('id','desc');
        $query = $this->db->get('functions');
        return $query;
    }

    /*
     * menampilkan data per id
     */
    function findbyid($id)
    {
        $this->db->where('id',$id);
        $query = $this->db->get('functions');
        return $query->row_array();
    }

    /*
     * memasukan data
     */
    function insert_function($data)
    {
        $this->db->insert('functions',$data);
    }

    /*
     * fungsi untuk mengubah data
     */
    function update($id,$data)
    {
        $this->db->where('id',$id);
        $this->db->update('functions',$data);
    }

    /*
     * function menghapus data
     */
    function delete($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('functions');
    }

    function get_manage_group_privileges() {
        $this->load->database();
        $this->db->select(array('f.*','p.id as id_priviledge'));
        $this->db->from('functions f');
        $this->db->join('privileges p','f.id=p.function_id','left');
        $this->db->order_by("f.name", "asc");
        return $this->db->get();
    }
}