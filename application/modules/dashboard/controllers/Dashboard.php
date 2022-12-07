<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Dashboard extends MX_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model(array('dashboard_models'));
        $this->load->helper(array('form', 'html'));
        $this->template->set('title', '<i class="fa text-success"> Dashboard </i>');
        // $this->output->enable_profiler(TRUE);
    }

    function index()
    {
        $this->ion_auth->is_allow('dashboard');
        $role = $this->session->userdata('group_id');
        $data['chart'] = $this->dashboard_models->get_kp();
        $data['skripsi'] = $this->dashboard_models->get_skripsi();
        $data['individu'] = $this->dashboard_models->get_kkl_individu();
        $data['kelompok'] = $this->dashboard_models->get_kkl_kelompok();
        if ($role == '1') {
            $this->template->load('layout', 'admin', $data);
        } else {
            $this->template->load('layout', 'views');
        }
    }
}
