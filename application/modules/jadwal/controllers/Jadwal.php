<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Jadwal extends MX_Controller
{
    var $imagePath = 'files/jadwal/';
    function __construct()
    {
        parent::__construct();
        $this->load->model(array('jadwalmodels', 'akademikmodels', 'configmodels'));
        $this->template->set('title', '<i class="fa text-success"> Jadwal </i>');
        $this->load->helper('tanggal');
        // $this->output->enable_profiler(TRUE);
    }

    public function index()
    {
        // $this->ion_auth->is_allow('jadwal');
        $data['jadwal'] = $this->jadwalmodels->get_all();
        $this->template->load('layout', 'views', $data);
    }

    function jadwal_user()
    {
        $this->ion_auth->is_allow('jadwal/' . __FUNCTION__);
        $data['jadwal'] = $this->jadwalmodels->jadwal_by_penerima();
        $this->template->load('layout', 'result', $data);
    }

    public function insert()
    {
        $this->ion_auth->is_allow('jadwal/' . __FUNCTION__);
        $this->load->library('form_validation');
        $this->form_validation->set_rules('keterangan', 'keterangan', 'trim|required', array('required' => '%s Harus Diisi.'));
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissable">
                                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>', '</div>');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('layout', 'insert');
            $this->session->set_flashdata('message', '<div class="alert alert-danger">
            <button class="close" data-dismiss="alert"> × </button>
            <i class="fa fa-check-circle"></i>
            <strong> Jadwal gagal dikirim!!! </strong>
        </div>');
        } else {
            $this->db->trans_start();
            $params = array(
                'keterangan'           => $this->input->post('keterangan'),
                'date'                 => $this->input->post('tanggal')
            );
            if ($_FILES['file']['error'] != 4) {
                $config['upload_path'] = $this->imagePath;
                $config['allowed_types'] = 'pdf';
                $config['max_size'] = '2048';
                $this->load->library('upload', $config);

                if ($this->upload->do_upload("file")) {
                    $image = $this->upload->data();
                    $params['filename'] = $image['file_name'];
                    $params['image'] = $this->imagePath . $image['file_name'];
                } else {
                    $error = array('error' => $this->upload->display_errors());
                    $data['error_upload'] = '<div class="alert alert-danger alert-dismissable">
                                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>' . $error['error'] . '</div>';
                    $this->template->load('layout', 'insert', $data);
                    $this->session->set_flashdata('message', '<div class="alert alert-danger">
                                <button class="close" data-dismiss="alert"> × </button>
                                <i class="fa fa-check-circle"></i>
                                <strong> Jadwal gagal dikirim!!! </strong>
                            </div>');
                    return false;
                }
            }
            $id = $this->jadwalmodels->insert($params);

            $data = $this->input->post('tujuan');
            if (!empty($data)) {
                $jumlah = count($data);
                for ($i = 0; $i < $jumlah; $i++) {
                    $params = array(
                        'id_jadwal' => $id,
                        'id_user' => $data[$i],
                    );
                    $this->jadwalmodels->insert_penerima($params);
                }
            }
            $this->db->trans_complete();
            redirect('jadwal');
        }
    }

    function update()
    {
        $this->ion_auth->is_allow('jadwal/' . __FUNCTION__);
        $this->load->library('form_validation');
        $this->form_validation->set_rules('keterangan', 'keterangan', 'trim|required', array('required' => '%s Harus Diisi.'));
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissable">
                                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>', '</div>');

        $id = base64_decode(urldecode($this->uri->segment(3)));
        if ($this->form_validation->run() == FALSE) {
            $data['jadwal'] = $this->jadwalmodels->findbyid($id);
            $data['penerima'] = $this->jadwalmodels->penerima($id);
            $this->template->load('layout', 'update', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-danger">
            <button class="close" data-dismiss="alert"> × </button>
            <i class="fa fa-check-circle"></i>
            <strong> Jadwal gagal dikirim!!! </strong>
        </div>');
        } else {
            $this->db->trans_start();
            $params = array(
                'keterangan'           => $this->input->post('keterangan'),
                'date'                 => $this->input->post('tanggal')
            );
            if ($_FILES['file']['error'] != 4) {
                $config['upload_path'] = $this->imagePath;
                $config['allowed_types'] = 'pdf';
                $config['max_size'] = '2048';
                $this->load->library('upload', $config);

                if ($this->upload->do_upload("file")) {
                    $image = $this->upload->data();
                    $params['filename'] = $image['file_name'];
                    $params['image'] = $this->imagePath . $image['file_name'];
                } else {
                    $error = array('error' => $this->upload->display_errors());
                    $data['error_upload'] = '<div class="alert alert-danger alert-dismissable">
                                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>' . $error['error'] . '</div>';
                    $this->template->load('layout', 'insert', $data);
                    $this->session->set_flashdata('message', '<div class="alert alert-danger">
                                <button class="close" data-dismiss="alert"> × </button>
                                <i class="fa fa-check-circle"></i>
                                <strong> Jadwal gagal dikirim!!! </strong>
                            </div>');
                    return false;
                }
            }
            $this->jadwalmodels->update($id, $params);

            $data = $this->input->post('tujuan');
            if (!empty($data)) {
                $jumlah = count($data);
                for ($i = 0; $i < $jumlah; $i++) {
                    $params = array(
                        'id_jadwal' => $id,
                        'id_user' => $data[$i],
                    );
                    $this->jadwalmodels->insert_penerima($params);
                }
            }
            $this->db->trans_complete();
            redirect('jadwal');
        }
    }


    /*
     * function untuk menghapus data pembayaran
     */
    function delete()
    {
        // $this->ion_auth->is_allow('jadwal/' . __FUNCTION__);
        $id = $this->uri->segment(3);
        $this->jadwalmodels->delete($id);
        $this->jadwalmodels->delete_vj($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button> Data Berhasil Dihapus. </div>');
        redirect('jadwal');
    }

    /*
     * download file
     */
    function download()
    {
        $this->load->helper('download');
        $id = $this->uri->segment(3, FALSE);
        if ($id == FALSE) {
            redirect('home', 'refresh');
        }
        if (is_numeric($id) == FALSE) {
            redirect('home', 'refresh');
        }
        if ($this->jadwalmodels->cekFile($id) == FALSE) {
            redirect('home', 'refresh');
        }
        $file = $this->jadwalmodels->getFileInfo($id);
        $full_path = $file['full_path'];
        $name = $file['name'];
        $data = file_get_contents($full_path);
        force_download($name, $data);
    }

    // user
    function user()
    {
        $query = $this->jadwalmodels->get_all_user();
        $datauser = array();
        foreach ($query->result() as $row) {
            $datauser[$row->id] = $row->username . ' - ' . $row->nama_lengkap;
        }
        echo json_encode($datauser);
    }

    /*
     * function untuk menghapus data pembayaran
     */
    function penerima_delete()
    {
        // $this->ion_auth->is_allow('jadwal/' . __FUNCTION__);
        $id = $this->uri->segment(3);
        $id_jadwal = $this->uri->segment(4);
        $this->jadwalmodels->delete($id);
        $this->jadwalmodels->delete_vj($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button> Data Berhasil Dihapus. </div>');
        redirect('jadwal/update/' . urlencode(base64_encode($id_jadwal)));
    }
}
