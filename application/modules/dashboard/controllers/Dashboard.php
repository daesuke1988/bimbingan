<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Dashboard extends MX_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model(array('dashboard_models'));
        $this->load->helper(array('form', 'html', 'tanggal'));
        $this->template->set('title', '<i class="fa text-success"> Dashboard </i>');
        // $this->output->enable_profiler(TRUE);
    }

    function index()
    {
        $this->ion_auth->is_allow('dashboard');
        $role = $this->session->userdata('group_id');
        if ($role == '1') {
            $data['chart'] = $this->dashboard_models->get_kp();
            $data['skripsi'] = $this->dashboard_models->get_skripsi();
            $data['individu'] = $this->dashboard_models->get_kkl_individu();
            $data['kelompok'] = $this->dashboard_models->get_kkl_kelompok();
            $this->template->load('layout', 'admin', $data);
        } elseif ($role == '4') {
            $data['kp'] = $this->dashboard_models->view_jml_kp();
            $data['skripsi'] = $this->dashboard_models->view_jml_skripsi();
            $data['individu'] = $this->dashboard_models->view_jml_individu();
            $data['kelompok'] = $this->dashboard_models->view_jml_kelompok();
            $this->template->load('layout', 'dosen', $data);
        } elseif ($role == '5') {
            $data['kp'] = $this->dashboard_models->time_kp();
            $data['skripsi'] = $this->dashboard_models->time_skripsi();
            $data['individu'] = $this->dashboard_models->time_individu();
            $data['kelompok'] = $this->dashboard_models->time_kelompok();
            $this->template->load('layout', 'mhs', $data);
        } else {
            $this->template->load('layout', 'views');
        }
    }
}
