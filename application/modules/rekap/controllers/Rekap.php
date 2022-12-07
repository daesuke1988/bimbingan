<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Rekap extends MX_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model(array('rekapmodels', 'akademikmodels'));
        $this->template->set('title', '<i class="fa text-success">Rekap Bimbingan </i>');
        // $this->output->enable_profiler(TRUE);
    }

    function index()
    {
        $this->ion_auth->is_allow('rekap');
        $this->template->load('layout', 'rekap_bimbingan/index');
    }

    // menampilkan dan mencari data jumlah mahasiswa bimbingan
    function result()
    {
        $this->ion_auth->is_allow('rekap/' . __FUNCTION__);
        $data['tahun'] = $this->input->post('tahun');
        $data['semester'] = $this->input->post('semester');
        $data['rekap'] = $this->rekapmodels->jml_mhs_bimbingan($data['tahun'], $data['semester']);
        $this->load->view('rekap_bimbingan/result', $data);
    }

    // menampilkan views rekap bimbingan kp
    function bimbingan_kp()
    {
        $this->ion_auth->is_allow('rekap/' . __FUNCTION__);
        $this->template->load('layout', 'rekap_bimbingan/index_kp');
    }

    // menampilkan dan mencari data jumlah mahasiswa bimbingan kp
    function result_kp()
    {
        $this->ion_auth->is_allow('rekap/' . __FUNCTION__);
        $data['tahun'] = $this->input->post('tahun');
        $data['semester'] = $this->input->post('semester');
        $data['rekap'] = $this->rekapmodels->jml_bimbingan_kp($data['tahun'], $data['semester']);
        $this->load->view('rekap_bimbingan/result_kp', $data);
    }
    // menampilkan views rekap bimbingan skripsi
    function bimbingan_skripsi()
    {
        $this->ion_auth->is_allow('rekap/' . __FUNCTION__);
        $this->template->load('layout', 'rekap_bimbingan/index_skripsi');
    }

    // menampilkan dan mencari data jumlah mahasiswa bimbingan skripsi
    function result_skripsi()
    {
        $this->ion_auth->is_allow('rekap/' . __FUNCTION__);
        $data['tahun'] = $this->input->post('tahun');
        $data['semester'] = $this->input->post('semester');
        $data['rekap'] = $this->rekapmodels->jml_bimbingan_skripsi($data['tahun'], $data['semester']);
        $this->load->view('rekap_bimbingan/result_skripsi', $data);
    }
    // menampilkan views rekap bimbingan kkl_individu
    function bimbingan_kkl_individu()
    {
        $this->ion_auth->is_allow('rekap/' . __FUNCTION__);
        $this->template->load('layout', 'rekap_bimbingan/index_kkl_individu');
    }

    // menampilkan dan mencari data jumlah mahasiswa bimbingan kkl_individu
    function result_kkl_individu()
    {
        $this->ion_auth->is_allow('rekap/' . __FUNCTION__);
        $data['tahun'] = $this->input->post('tahun');
        $data['semester'] = $this->input->post('semester');
        $data['rekap'] = $this->rekapmodels->jml_bimbingan_kkl_individu($data['tahun'], $data['semester']);
        $this->load->view('rekap_bimbingan/result_kkl_individu', $data);
    }
}
