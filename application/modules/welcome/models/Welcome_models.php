<?php if (!defined('BASEPATH')) exit('No Direct script access allowed');
/**
 * Created by PhpStorm.
 * User: kresna
 * Date: 11/30/2016
 * Time: 9:56 AM
 */
class Welcome_models extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function insert_user($data)
    {
        $this->db->insert('users', $data);
        return @$this->db->insert_id();
    }

    function findbyid($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('users');
        return $query->row_array();
    }

    function config()
    {
        return $this->db->query("select * from config limit 1")->row_array();
    }
}
