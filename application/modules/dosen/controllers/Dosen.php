<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Dosen extends MX_Controller
{
    public $data;
    function __construct()
    {
        parent::__construct();
        $this->load->model(array('dosenmodels'));
        $this->template->set('title', '<i class="fa text-success"> Data Dosen </i>');
    }

    function index()
    {
        $this->ion_auth->is_allow('dosen');
        $data['dosen'] = $this->dosenmodels->get_all();
        $this->template->load('layout', 'views', $data);
    }

    /*
     * function untuk menambahkan data group
     */
    function insert()
    {
        $this->ion_auth->is_allow('dosen/' . __FUNCTION__);
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nama', 'Nama Dosen', 'trim|required', array('required' => '%s Harus Diisi.'));
        $this->form_validation->set_rules('gelar_belakang', 'Gelar Belakang', 'trim|required', array('required' => '%s Harus Diisi.'));
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>', '</div>');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('layout', 'insert');
            $this->session->set_flashdata('message_dosen', '<div class="alert alert-danger alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button> Data gagal disimpan. </div>');
        } else {
            $data = array(
                'nama'              => $this->input->post('nama'),
                'gelar_depan'       => $this->input->post('gelar_depan'),
                'gelar_belakang'    => $this->input->post('gelar_belakang'),
                'npp'               => empty($this->input->post('npp')) ? $this->input->post('nip') : $this->input->post('npp'),
                'nip'               => $this->input->post('nip'),
            );

            $this->dosenmodels->insert($data);
            $this->session->set_flashdata('message_dosen', '<div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button> Data Berhasil Disimpan. </div>');
            redirect('dosen');
        }
    }

    /*
     * function untuk mengubah data dosen
     */
    function update()
    {
        $this->ion_auth->is_allow('dosen/' . __FUNCTION__);
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nama', 'Nama Dosen', 'trim|required', array('required' => '%s Harus Diisi.'));
        $this->form_validation->set_rules('gelar_belakang', 'Gelar Belakang', 'trim|required', array('required' => '%s Harus Diisi.'));
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>', '</div>');

        $id = base64_decode(urldecode($this->uri->segment(3)));
        if ($this->form_validation->run() == FALSE) {
            $data['dosen'] = $this->dosenmodels->findbyid($id);
            $this->template->load('layout', 'update', $data);
            $this->session->set_flashdata('message_dosen', '<div class="alert alert-danger alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button> Data gagal disimpan. </div>');
        } else {
            $data = array(
                'nama'              => $this->input->post('nama'),
                'gelar_depan'       => $this->input->post('gelar_depan'),
                'gelar_belakang'    => $this->input->post('gelar_belakang'),
                'npp'               => is_null($this->input->post('npp')) ? $this->input->post('nip') : $this->input->post('npp'),
                'nip'               => $this->input->post('nip'),
            );

            $this->dosenmodels->update($id, $data);
            $this->session->set_flashdata('message_dosen', '<div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button> Data Berhasil Disimpan. </div>');
            redirect('dosen');
        }
    }

    /*
     * function untuk menghapus data dosen
     */
    function delete()
    {
        $this->ion_auth->is_allow('dosen/' . __FUNCTION__);
        $id = $this->uri->segment(3);
        $this->dosenmodels->delete($id);
        $this->session->set_flashdata('message_dosen', '<div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button> Data Berhasil Dihapus. </div>');
        redirect('dosen');
    }
}
