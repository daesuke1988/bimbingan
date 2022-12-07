<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Auth library
 *
 */
class Auth
{
    var $CI = NULL;
    public function __construct()
    {
        // get CI's object
        $this->CI = &get_instance();
        $this->CI->load->database();
        $this->CI->load->model('ion_auth_model');

        if (!$this->is_logged_in() && get_cookie('identity') && get_cookie('remember_code')) {
            $this->CI->ion_auth_model->login_remembered_user();
        }

        $email_config = $this->CI->config->item('email_config', 'ion_auth');

        if ($this->CI->config->item('use_ci_email', 'ion_auth') && isset($email_config) && is_array($email_config)) {
            $this->email->initialize($email_config);
        }

        $this->CI->ion_auth_model->trigger_events('library_constructor');
    }

    function login_sso($username)
    {
        // cek di database, ada ga?
        $this->CI->db->select('u.id as id_user, email, group_id, username, nama_lengkap');
        $this->CI->db->from('users u');
        $this->CI->db->join('users_groups ug', 'ug.user_id = u.id', 'left');
        $this->CI->db->where('u.email', $username);
        $this->CI->db->where('u.is_active', 'true');
        $query = $this->CI->db->get();

        foreach ($query->result() as $row) {
            $id_user = $row->id_user;
            $email = $row->email;
            $group_id = $row->group_id;
            $username = $row->username;
            $nama_lengkap = $row->nama_lengkap;
        }

        if ($query->num_rows() == 1) {
            $newdata = array(
                'id_user'    => $id_user,
                'email'  => $email,
                'group_id'    => $group_id,
                'username'  => $username,
                'nama_lengkap'    => $nama_lengkap,

            );
            $this->CI->session->set_userdata($newdata);
            $this->CI->db->where('id', $id_user);
            $this->CI->db->update('users', array('waktu_login' => date('Y-m-d H:i:s')));
            return TRUE;
        } else {
            // No existing user.
            return FALSE;
        }
    }

    // untuk validasi login
    function do_login($username, $password)
    {
        // cek di database, ada ga?
        $this->CI->db->select('u.id as id_user, username,nama_lengkap,group_id');
        $this->CI->db->from('users u');
        $this->CI->db->join('users_groups ug', 'ug.user_id = u.id', 'left');
        $this->CI->db->where('u.username', $username);
        $this->CI->db->where('u.password', $password);
        $this->CI->db->where('u.is_active', 'true');
        $query = $this->CI->db->get();

        foreach ($query->result() as $row) {
            $id_user = $row->id_user;
            $username = $row->username;
            $group_id = $row->group_id;
            $nama = $row->nama_lengkap;
        }

        if ($query->num_rows() == 1) {
            $newdata = array(
                'id_user'    => $id_user,
                'username'  => $username,
                'group_id'    => $group_id,
                'nama'    => $nama
            );
            $this->CI->session->set_userdata($newdata);
            $this->CI->db->where('id', $id_user);
            $this->CI->db->update('users', array('waktu_login' => date('Y-m-d H:i:s')));
            return TRUE;
        } else {
            // No existing user.
            return FALSE;
        }
    }

    // untuk mengecek apakah user sudah login/belum
    function is_logged_in()
    {
        if ($this->CI->session->userdata('id_user') == '') {
            return false;
        }
        return true;
    }

    // untuk logout
    public function logout()
    {
        $this->CI->ion_auth_model->trigger_events('logout');

        $identity = $this->CI->config->item('identity', 'ion_auth');
        $this->CI->session->unset_userdata(array($identity => '', 'id' => '', 'id' => ''));

        //delete the remember me cookies if they exist
        if (get_cookie('identity')) {
            delete_cookie('identity');
        }
        if (get_cookie('remember_code')) {
            delete_cookie('remember_code');
        }

        //Destroy the session
        $this->CI->session->sess_destroy();

        //Recreate the session
        if (substr(CI_VERSION, 0, 1) == '2') {
            $this->CI->session->sess_create();
        }

        //        $this->CI->set_message('logout_successful');
        return TRUE;
    }

    //
    public function is_allow($function)
    {
        //echo "function is_allow";
        $this->CI->ion_auth_model->trigger_events('is_allow');
        if (!$this->is_logged_in()) {
            redirect('/dashboard', 'refresh');
        }
        //$user = $this->user()->row();
        //echo json_encode($user);
        if (!$this->CI->ion_auth_model->privilege($function)) {
            redirect('/dashboard  ', 'refresh');
        }
    }
}
