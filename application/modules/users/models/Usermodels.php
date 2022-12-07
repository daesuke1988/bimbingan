<?php if (!defined('BASEPATH')) exit('No Direct script access allowed');
/**
 * Created by PhpStorm.
 * User: kresna
 * Date: 8/21/2015
 * Time: 9:30 AM
 */
class Usermodels extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    /*
     * function menampilkan
     */
    function get_all_user()
    {
        $this->db->select("u.id as user_id, u.username as username,u.waktu_login as last_login, u.nama_lengkap as nama_lengkap, g.name as nama");
        $this->db->from("users u");
        $this->db->join('users_groups ug', 'ug.user_id = u.id', 'left');
        $this->db->join('groups g', 'ug.group_id = g.id', 'left');
        //        $this->db->like('u.email',$keyword);
        //        $this->db->or_ilike('u.nip',$keyword);
        $this->db->order_by("u.id", "desc");
        $getData = $this->db->get('');
        return $getData;
    }

    /*
     * function untuk memasukan data user
     */
    function insert($data)
    {
        if ($this->isUsernameExists($this->input->post('username'), $this->input->post('email'))) {
            return FALSE;
        } else {
            $this->db->insert('users', $data);
        }
        return @$this->db->insert_id();
    }

    /*
     * membatasi username yang sama
     */
    function isUsernameExists($username)
    {
        $this->db->from('users');
        $this->db->where('username', $username);
        $num = $this->db->count_all_results();
        if ($num == 0) {
            return FALSE;
        } else {
            return TRUE;
        }
    }

    /*
     * menampilkan data user per id
     */
    function get_user_by_id($id)
    {
        $this->db->select('u.id as id_user, u.username as username, u.nama_lengkap as nama_lengkap, u.waktu_login, ug.group_id as id_groups');
        $this->db->join('users_groups ug', 'ug.user_id = u.id', 'left');
        $this->db->where('u.id', $id);
        return $this->db->get('users u');
    }

    /*
     * memasukan data group untuk mengatur privillagez
     */
    function insert_group($data)
    {
        $this->db->insert('users_groups', $data);
    }

    /*
     * update data users
     */
    function update($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('users', $data);
    }

    /*
     * function update user group
     */
    function update_group($id, $group)
    {
        $this->db->where('user_id', $id);
        $this->db->update('users_groups', $group);
    }

    /*
     * function menghapus data user
     */
    function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('users');
    }

    /*
     * menghapus user dari data users group
     */
    function delete_group($id)
    {
        $this->db->where('user_id', $id);
        $this->db->delete('users_groups');
    }

    /*
     * function cek delete user
     */
    function cek_delete($id)
    {
        $this->db->select('count(u.id) as jumlah');
        $this->db->join('ruang r', 'r.id_users = u.id');
        $this->db->where('u.id', $id);
        $query = $this->db->get('users u');
        return $query->row_array();
    }

    /*
     * melihat log yang dilakukan
     */
    function log($id)
    {
        $date = date('Y-m-d 00:00:00');
        $this->db->where('id_user', $id);
        $this->db->where("timestamp >= '$date'");
        $this->db->order_by('timestamp', 'DESC');
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('log_actifity');
        return $query;
    }
}
