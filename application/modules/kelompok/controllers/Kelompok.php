<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Kelompok extends MX_Controller
{
    public $data;
    function __construct()
    {
        parent::__construct();
        $this->load->model(array('kelompokmodels'));
        $this->template->set('title', '<i class="fa text-success"> Data Kelompok </i>');
    }

    function index()
    {
        $this->ion_auth->is_allow('kelompok');
        $data['kelompok'] = $this->kelompokmodels->get_all_kelompok();
        $this->template->load('layout', 'views', $data);
    }

    /*
     * function untuk menambahkan data Kelompok
     */
    function insert()
    {
        $this->ion_auth->is_allow('kelompok/' . __FUNCTION__);
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nama', 'Nama Kelompok', 'trim|required');
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>', '</div>');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('layout', 'insert');
            $this->session->set_flashdata('message_kelompok', '<div class="alert alert-danger alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button> Data gagal disimpan. </div>');
        } else {
            $data = array(
                'nama'      => $this->input->post('nama')
            );

            $this->kelompokmodels->insert($data);
            $this->session->set_flashdata('message_kelompok', '<div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button> Data Berhasil Disimpan. </div>');
            redirect('kelompok');
        }
    }

    /*
     * function untuk mengubah data kelompok
     */
    function update()
    {
        $this->ion_auth->is_allow('kelompok/' . __FUNCTION__);
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nama', 'Nama Kelompok', 'trim|required');
        $this->form_validation->set_error_delimiters('<div class="form-Kelompok has-error"><span class="help-block" >', '</span></div>');

        $id = base64_decode(urldecode($this->uri->segment(3)));
        if ($this->form_validation->run() == FALSE) {
            $data['kelompok'] = $this->kelompokmodels->findbyid($id);
            $this->template->load('layout', 'update', $data);
            $this->session->set_flashdata('message_kelompok', '<div class="alert alert-danger alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button> Data gagal disimpan. </div>');
        } else {
            $data = array(
                'nama'      => $this->input->post('nama')
            );

            $this->kelompokmodels->update($id, $data);
            $this->session->set_flashdata('message_kelompok', '<div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button> Data Berhasil Disimpan. </div>');
            redirect('kelompok');
        }
    }

    /*
     * function untuk menghapus data kelompok
     */
    function delete()
    {
        $this->ion_auth->is_allow('kelompok/' . __FUNCTION__);
        $id = base64_decode(urldecode($this->uri->segment(3)));
        $this->kelompokmodels->delete($id);
        $this->session->set_flashdata('message_kelompok', '<div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button> Data Berhasil Dihapus. </div>');
        redirect('kelompok');
    }
}
