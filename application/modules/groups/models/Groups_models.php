<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: kresna
 * Date: 8/27/2015
 * Time: 10:08 AM
 */

class groups_models extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    /*
     * function menampilkan data groups users
     */
    function get_all_groups()
    {
        $this->db->order_by('id', 'asc');
        $query = $this->db->get('groups');
        return $query;
    }

    /*
     * function menampilkan data per id
     */
    function findbyid($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('groups');
        return $query->row_array();
    }

    /*
     * function menambahkan data groups
     */
    function insert($data)
    {
        $this->db->insert('groups', $data);
    }

    /*
     * function untuk mengganti data groups
     */
    function update($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('groups', $data);
    }

    /*
     * function menghapus data groups
     */
    function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('groups');
    }

    /*
    * menampilkan semua menu yang join deng group
    */
    function manajemen($id)
    {
        $query = $this->db->query("
            SELECT m.url as url, m.desc as desc,m.id as id_m, m.kode as kode
            FROM
                functions m
            LEFT JOIN (SELECT * from privileges where group_id = '$id') g on g.function = m.id
            where  m.status = 't'
            ORDER BY m.id ASC
        ");

        //        die($this->db->last_query($query));
        return $query;
    }

    function child($id, $menu)
    {
        $query = $this->db->query("
            SELECT m.url as url, m.desc as desc,m.id as id_m, m.kode as kode
            FROM functions m
            LEFT JOIN (SELECT * from groups where level_id = '$id') g on g.menu_id = m.menu_id
            where m.kode like '" . $menu . "%' AND m.status = 'f'
            ORDER BY m.menu_grup ASC, m.menu_id ASC
        ");

        //        die($this->db->last_query($query));
        return $query;
    }

    function get_manage_group_privileges($id)
    {
        $this->load->database();
        $this->db->select(array('f.*', 'p.id as id_priviledge'));
        $this->db->from('functions f');
        $this->db->join('(select * from privileges where group_id=' . $id . ') p', 'f.id=p.function_id', 'left');
        $this->db->order_by("f.name", "asc");
        return $this->db->get();
    }

    /*
     * function memasukan data hak akses menu
     */
    function insert_privileges($data)
    {
        $this->db->insert('privileges', $data);
    }

    /*
     * funtion menghapus semua hak akses per user group
     */
    function delete_privileges($id)
    {
        $this->db->delete('privileges', array('group_id' => $id));
    }

    /*
     * menampilkan data manajemen per id group
     */
    function findIdGroup($id)
    {
        $this->db->where('group_id', $id);
        $query = $this->db->get('privileges');
        if ($query->num_rows() > 0)
            return $query->result_array();
        else
            return null;
    }

    public function get_kode_privilege_by_url_request($url)
    {
        $this->db->select('kode');
        return $this->db->get_where('functions', array('name' => $url));
    }
}
