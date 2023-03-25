<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends MX_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    //	public function index()
    //	{
    //		$this->load->view('welcome_message');
    //	}
    var $data = '';

    function __construct()
    {
        parent::__construct();
        $this->load->library('auth');
        $this->load->models(array('welcome_models', 'users/usermodels'));
        //$this->output->enable_profiler(TRUE);
    }


    function index()
    {
        if ($this->auth->is_logged_in()) // Jika user sudah login (Session authenticated ditemukan)
            redirect('dashboard');
        $this->load->view('logins');
    }

    function request_password()
    {
        $this->load->view('request_password');
    }

    function set_password()
    {
        $email = $this->input->post('email');
        $cek_email = $this->db->query("select * from users where email = '$email'")->row_array();
        if (!is_null($cek_email)) {
            $data['users'] = $cek_email;
            $this->load->view('aktivasi_password', $data);
        } else {
            $this->load->view('not_found');
        }
    }

    function update_password()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('pass', 'Password', 'trim|required');

        $this->form_validation->set_error_delimiters('<div class="form-group has-error"><span class="help-block" >', '</span></div>');

        // dapatkan id user dari segment ke-3 dari URI
        $id = !is_null(base64_decode(urldecode($this->uri->segment(3)))) ? base64_decode(urldecode($this->uri->segment(3))) : $this->input->post('id_user');
        if ($this->form_validation->run() == FALSE) {
            $data['title']    = ' Users';
            $data['users'] = $this->usermodels->get_user_by_id($id);
            $this->load->view('password', $data);
        } else {
            $id_user = $this->input->post('id_user');
            $data = array(
                'passwd'      => sha1($this->input->post('pass')),
            );

            $this->usermodels->update($id_user, $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success">
                                            <button class="close" data-dismiss="alert"> × </button>
                                            <i class="fa fa-check-circle"></i>
                                            <strong>Password Berhasil diubah</strong>
                                        </div>');
            redirect('welcome');
        }
    }

    function login()
    {
        if ($this->auth->is_logged_in()) {
            redirect('dashboard', 'refresh');
            //            echo 'oke';
        }

        $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'Username', 'trim|required', array('required' => '%s Harus Diisi.'));
        $this->form_validation->set_rules('password', 'Password', 'trim|required', array('required' => '%s Harus Diisi.'));

        $this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><strong>', '</strong></div>');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('logins');
        } else {
            $username = $this->input->post('username');
            $password = sha1($this->input->post('password'));
            $success = $this->auth->do_login($username, $password);

            if ($success) {
                //                MY_log::write_log_database("success-login", $this->session->userdata('id_user'), $this->session->userdata('username'),null,null,null, 'logout',false);
                redirect('dashboard');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger">
                        <button class="close" data-dismiss="alert"> × </button>
                        <i class="fa fa-check-circle"></i>
                        <strong>Login Gagal! Silahkan Cek Kembali Username dan Password Anda!</strong></div>');
                //                MY_log::write_log_database("gagal-login", $this->session->userdata('id_user'), $this->session->userdata('username'),null,null,null, 'gagl login',false);
                $data['title'] = '';
                $this->load->view('logins');
            }
        }
    }


    function logout()
    {

        $this->session->sess_destroy();
        redirect('welcome');
        // $this->load->library('cas');
        // $this->cas->logout();
    }

    function send_mail()
    {
        $this->load->library('email');
        $config['protocol'] = 'mail';
        $config['smtp_host'] = 'smtp.uny.ac.id';
        $config['smtp_port'] = 465;
        $config['smtp_user'] = 'agus_kresnanto@uny.ac.id';
        $config['smtp_pass'] = '085743370320';
        $config['mailtype'] = 'html';

        $this->email->initialize($config);

        $this->email->set_newline('\r\n');

        $this->email->from('agus_kresnanto@uny.ac.id');

        $this->email->to('hiwatari.krado@gmail.com');

        $this->email->subject('DPT');
        $this->email->message('uji coba');
        // $this->email->send();
        if ($this->email->send())
            echo "Congragulation Email Send Successfully.";
        else
            echo "email_sent", "You have encountered an error";
    }
}
