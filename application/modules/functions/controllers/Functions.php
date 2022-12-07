<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Functions extends MX_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model(array('functions_models'));
        $this->template->set('title', '<i class="fa text-success"> Data Fungsi </i>');
    }

    function index()
    {
        $this->ion_auth->is_allow('functions');
        $data['list_data'] = $this->menu_lib->prepare_list_menu($this->functions_models->get_manage_group_privileges()->result_array());
        $data['functions']  = $this->functions_models->get_all_function();
        $this->template->load('layout', 'views', $data);
    }

    function insert()
    {
        $this->ion_auth->is_allow('functions/' . __FUNCTION__);
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'URL', 'trim|required|max_length[100]');
        $this->form_validation->set_rules('desc', 'Deskripsi Nama', 'trim|required|max_length[100]');
        $this->form_validation->set_rules('menu', 'Kondisi', 'trim|required');
        $this->form_validation->set_rules('kode', 'Kode', 'trim|required');
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>', '</div>');
        if ($this->form_validation->run() == false) {
            $this->template->load('layout', 'insert');
            $this->session->set_flashdata('message_functions', '<div class="alert alert-danger alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button> Data gagal disimpan. </div>');
        } else {
            $data = array(
                'name'      => $this->input->post('name'),
                'desc'       => $this->input->post('desc'),
                'menu'      => $this->input->post('menu'),
                'kode'      => $this->input->post('kode')
            );

            $this->functions_models->insert_function($data);
            $this->session->set_flashdata('message_functions', '<div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button> Data Berhasil Disimpan. </div>');
            redirect('functions');
        }
    }

    function update()
    {
        $this->ion_auth->is_allow('functions/' . __FUNCTION__);
        $this->load->library('form_validation');
        $this->form_validation->set_rules('url', 'URL', 'trim|required|max_length[100]');
        $this->form_validation->set_rules('desc', 'Deskripsi Nama', 'trim|required|max_length[100]');
        $this->form_validation->set_rules('status', 'Kondisi', 'trim|required');
        $this->form_validation->set_rules('kode', 'Kode', 'trim|required');
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>', '</div>');

        $id = base64_decode(urldecode($this->uri->segment(3)));

        if ($this->form_validation->run() == FALSE) {
            $data['title']      = '<h2><i class="fa fa-th-large"></i> Funtions</h2>';
            $data['functions'] = $this->functions_models->findbyid($id);
            $this->template->load('layout', 'functions/update', $data);
            $this->session->set_flashdata('message_functions', '<div class="alert alert-danger alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button> Data gagal disimpan. </div>');
        } else {
            $data = array(
                'name' => $this->input->post('url'),
                'desc' => $this->input->post('desc'),
                'menu' => $this->input->post('status'),
                'kode' => $this->input->post('kode')
            );
            $this->functions_models->update($id, $data);
            $this->session->set_flashdata('message_functions', '<div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button> Data Berhasil Disimpan. </div>');
            redirect('functions');
        }
    }

    function delete()
    {
        $this->ion_auth->is_allow('functions/' . __FUNCTION__);
        $id = $this->uri->segment(3);
        $this->functions_models->delete($id);
        redirect('functions');
    }
}
