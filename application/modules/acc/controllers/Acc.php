<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Acc extends MX_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model(array('accmodels'));
        // $this->output->enable_profiler(TRUE);
    }

    function index()
    {
        $this->ion_auth->is_allow('acc');
        // $role = $this->session->userdata('group_id');
        $data['title'] = '<i class="fa text-success">Bimbingan Kerja Praktek </i>';
        $this->template->load('layout', 'kp/index_kp', $data);
    }

    function result_kp()
    {
        $this->ion_auth->is_allow('acc/' . __FUNCTION__);
        $data['tahun'] = $this->input->post('tahun');
        $data['semester'] = $this->input->post('semester');
        $data['acc'] = $this->accmodels->get_kp($data['tahun'], $data['semester']);
        $this->load->view('kp/result_kp', $data);
    }

    function index_skripsi()
    {
        $this->ion_auth->is_allow('acc/' . __FUNCTION__);
        $data['title'] = '<i class="fa text-success">Bimbingan Skripsi </i>';
        $this->template->load('layout', 'skripsi/index_skripsi', $data);
    }

    function result_skripsi()
    {
        $this->ion_auth->is_allow('acc/' . __FUNCTION__);
        $data['tahun'] = $this->input->post('tahun');
        $data['semester'] = $this->input->post('semester');
        $data['acc'] = $this->accmodels->get_skripsi($data['tahun'], $data['semester']);
        $this->load->view('skripsi/result_skripsi', $data);
    }

    function index_kkl_individu()
    {
        $this->ion_auth->is_allow('acc/' . __FUNCTION__);
        $data['title'] = '<i class="fa text-success">Bimbingan KKL Individu </i>';
        $this->template->load('layout', 'kkl_individu/index_kkl_individu', $data);
    }

    function result_kkl_individu()
    {
        $this->ion_auth->is_allow('acc/' . __FUNCTION__);
        $data['tahun'] = $this->input->post('tahun');
        $data['semester'] = $this->input->post('semester');
        $data['acc'] = $this->accmodels->get_kkl_individu($data['tahun'], $data['semester']);
        $this->load->view('kkl_individu/result_kkl_individu', $data);
    }

    function index_kkl_kelompok()
    {
        $this->ion_auth->is_allow('acc/' . __FUNCTION__);
        $data['title'] = '<i class="fa text-success">Bimbingan KKL Kelompok </i>';
        $this->template->load('layout', 'kkl_kelompok/index_kkl_kelompok', $data);
    }

    function result_kkl_kelompok()
    {
        $this->ion_auth->is_allow('acc/' . __FUNCTION__);
        $data['tahun'] = $this->input->post('tahun');
        $data['semester'] = $this->input->post('semester');
        $data['acc'] = $this->accmodels->get_kkl_kelompok($data['tahun'], $data['semester']);
        $this->load->view('kkl_kelompok/result_kkl_kelompok', $data);
    }
}
