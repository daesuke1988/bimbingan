<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Chart extends MX_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model(array('chartmodels'));
        // $this->output->enable_profiler(TRUE);
    }

    function index()
    {
        $this->ion_auth->is_allow('chart');
        $data['title'] = '<i class="fa text-success"> Chart </i>';
        $this->template->load('layout', 'views', $data);
    }

    function result()
    {
        $data['tahun'] = $this->input->post('tahun');
        $data['semester'] = $this->input->post('semester');
        $data['chart'] = $this->chartmodels->get_kp($data['tahun'], $data['semester']);
        $data['skripsi'] = $this->chartmodels->get_skripsi($data['tahun'], $data['semester']);
        $data['individu'] = $this->chartmodels->get_kkl_individu($data['tahun'], $data['semester']);
        $data['kelompok'] = $this->chartmodels->get_kkl_kelompok($data['tahun'], $data['semester']);
        $this->load->view('result', $data);
    }
}
