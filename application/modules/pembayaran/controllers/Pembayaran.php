<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class pembayaran extends MX_Controller
{
    public $data;
    function __construct()
    {
        parent::__construct();
        $this->load->model(array('pembayaran_models', 'akademikmodels'));
        $this->template->set('title', '<i class="fa text-success"> Data Pembayaran </i>');
    }

    function index()
    {
        $this->ion_auth->is_allow('pembayaran');
        $data['pembayaran'] = $this->pembayaran_models->get_all_pembayaran();
        $this->template->load('layout', 'views', $data);
    }

    /*
     * function untuk menambahkan data group
     */
    function insert()
    {
        $this->ion_auth->is_allow('pembayaran/' . __FUNCTION__);
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nim', 'NIM', 'trim|required');
        $this->form_validation->set_rules('jenis', 'Jenis Pembayaran', 'trim|required');
        $this->form_validation->set_rules('tahun', 'Tahun Pembayaran', 'trim|required');
        $this->form_validation->set_rules('semester', 'Semester Pembayaran', 'trim|required');
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>', '</div>');

        if ($this->form_validation->run() == FALSE) {
            $data['mhs'] = $this->akademikmodels->mhs();
            $this->template->load('layout', 'insert', $data);
            $this->session->set_flashdata('message_pembayaran', '<div class="alert alert-danger alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button> Data gagal disimpan. </div>');
        } else {
            $nomor = $this->input->post('nim');
            list($nim, $nama) = explode(':', $nomor);
            $jenis = $this->input->post('jenis');
            $tahun = $this->input->post('tahun');
            $semester = $this->input->post('semester');
            if ($this->pembayaran_models->isExists($nim, $jenis, $tahun, $semester)) {
                $this->session->set_flashdata('message_pembayaran', '<div class="alert alert-warning alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button> Data Yang Anda Masukan Sudah Ada. </div>');
                redirect('pembayaran');
            } else {
                $data = array(
                    'nim'               => $nim,
                    'nama'              => $nama,
                    'jenis_pembayaran'  => $jenis,
                    'tahun'             => $tahun,
                    'semester'          => $semester
                );
                $this->pembayaran_models->insert($data);
                $this->session->set_flashdata('message_pembayaran', '<div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button> Data Berhasil Disimpan. </div>');
                redirect('pembayaran');
            }
        }
    }

    /*
     * function untuk mengubah data pembayaran
     */
    function update()
    {
        $this->ion_auth->is_allow('pembayaran/' . __FUNCTION__);
        $this->load->library('form_validation');
        $this->form_validation->set_rules('jenis', 'Jenis Pembayaran', 'trim|required');
        $this->form_validation->set_rules('tahun', 'Tahun Pembayaran', 'trim|required');
        $this->form_validation->set_rules('semester', 'Semester Pembayaran', 'trim|required');
        $this->form_validation->set_error_delimiters('<div class="form-group has-error"><span class="help-block" >', '</span></div>');

        $id = base64_decode(urldecode($this->uri->segment(3)));
        if ($this->form_validation->run() == FALSE) {
            $data['pembayaran'] = $this->pembayaran_models->findbyid($id);
            $this->template->load('layout', 'update', $data);
            $this->session->set_flashdata('message_pembayaran', '<div class="alert alert-danger alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button> Data gagal disimpan. </div>');
        } else {
            $data = array(
                'jenis_pembayaran'  => $this->input->post('jenis'),
                'tahun'             => $this->input->post('tahun'),
                'semester'          => $this->input->post('semester')
            );

            $this->pembayaran_models->update($id, $data);
            $this->session->set_flashdata('message_pembayaran', '<div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button> Data Berhasil Disimpan. </div>');
            redirect('pembayaran');
        }
    }

    /*
     * function untuk menghapus data pembayaran
     */
    function delete()
    {
        $this->ion_auth->is_allow('pembayaran/' . __FUNCTION__);
        $id = $this->input->post('id_pembayaran');
        $this->pembayaran_models->delete($id);
        $this->session->set_flashdata('message_pembayaran', '<div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button> Data Berhasil Dihapus. </div>');
        redirect('pembayaran');
    }
}
