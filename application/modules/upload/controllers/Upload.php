<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Upload extends MX_Controller
{
    var $imagePath = 'files/upload/';
    function __construct()
    {
        parent::__construct();
        $this->load->model(array('uploadmodels', 'akademikmodels', 'configmodels'));
        $this->template->set('title', '<i class="fa text-success"> Kerja Praktek </i>');
        // $this->output->enable_profiler(TRUE);
    }

    public function index()
    {
        $this->ion_auth->is_allow('upload');
        // $data['upload'] = $this->uploadmodels->get_all();
        $this->template->load('layout', 'views');
    }

    function search()
    {
        // $this->ion_auth->is_allow('upload/' . __FUNCTION__);
        $data['tahun'] = $this->input->post('tahun');
        $data['semester'] = $this->input->post('semester');
        $data['upload'] = $this->uploadmodels->get_all($data['tahun'],  $data['semester']);
        $this->load->view('result', $data);
    }

    public function insert()
    {
        $this->ion_auth->is_allow('upload/' . __FUNCTION__);
        $this->load->library('form_validation');
        $this->form_validation->set_rules('judul', 'Judul', 'trim|required', array('required' => '%s Harus Diisi.'));
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissable">
                                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>', '</div>');

        $nim = $this->session->userdata('username');
        if ($this->form_validation->run() == FALSE) {
            $this->template->load('layout', 'insert');
            $this->session->set_flashdata('message', '<div class="alert alert-danger">
            <button class="close" data-dismiss="alert"> × </button>
            <i class="fa fa-check-circle"></i>
            <strong> Laporan gagal dikirim!!! </strong>
        </div>');
        } else {
            $this->db->trans_start();
            $params = array(
                'nim'                   => $nim,
                'nama'                  => $this->session->userdata('nama'),
                'judul'                 => $this->input->post('judul'),
                'tahun'                 => $this->input->post('tahun'),
                'semester'              => $this->input->post('semester'),
            );
            if ($_FILES['file_cover']['error'] != 4) {
                $config['upload_path'] = $this->imagePath;
                $config['allowed_types'] = 'pdf';
                $config['max_size'] = '2048';
                $this->load->library('upload', $config);

                if ($this->upload->do_upload("file_cover")) {
                    $image = $this->upload->data();
                    $params['filename_cover'] = $image['file_name'];
                    $params['image_cover'] = $this->imagePath . $image['file_name'];
                } else {
                    $error = array('error' => $this->upload->display_errors());
                    $data['error_upload'] = '<div class="alert alert-danger alert-dismissable">
                                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>' . $error['error'] . '</div>';
                    $this->template->load('layout', 'insert', $data);
                    $this->session->set_flashdata('message', '<div class="alert alert-danger">
                                <button class="close" data-dismiss="alert"> × </button>
                                <i class="fa fa-check-circle"></i>
                                <strong> Laporan gagal dikirim!!! </strong>
                            </div>');
                    return false;
                }
            }
            if ($_FILES['file_pengesahan']['error'] != 4) {
                $config['upload_path'] = $this->imagePath;
                $config['allowed_types'] = 'pdf';
                $config['max_size'] = '2048';
                $this->load->library('upload', $config);

                if ($this->upload->do_upload("file_pengesahan")) {
                    $image_pengesahan = $this->upload->data();
                    $params['filename_pengesahan'] = $image_pengesahan['file_name'];
                    $params['image_pengesahan'] = $this->imagePath . $image_pengesahan['file_name'];
                } else {
                    $error = array('error' => $this->upload->display_errors());
                    $data['error_upload_pengesahan'] = '<div class="alert alert-danger alert-dismissable">
                                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>' . $error['error'] . '</div>';
                    $data['tahun']  = $data['config']['tahun'];
                    $this->template->load('layout', 'insert', $data);
                    $this->session->set_flashdata('message', '<div class="alert alert-danger">
                                <button class="close" data-dismiss="alert"> × </button>
                                <i class="fa fa-check-circle"></i>
                                <strong> Pengajuan gagal dikirim!!! </strong>
                            </div>');
                    return false;
                }
            }
            $this->uploadmodels->insert($params);
            $this->db->trans_complete();
            redirect('upload');
        }
    }

    function update()
    {
        $this->ion_auth->is_allow('upload/' . __FUNCTION__);
        $this->load->library('form_validation');
        $this->form_validation->set_rules('judul', 'Judul', 'trim|required', array('required' => '%s Harus Diisi.'));
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissable">
                                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>', '</div>');

        $id = base64_decode(urldecode($this->uri->segment(3)));
        if ($this->form_validation->run() == FALSE) {
            $data['upload'] = $this->uploadmodels->findbyid($id);
            $this->template->load('layout', 'update', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-danger">
            <button class="close" data-dismiss="alert"> × </button>
            <i class="fa fa-check-circle"></i>
            <strong> Upload gagal dikirim!!! </strong>
        </div>');
        } else {
            $this->db->trans_start();
            $params = array(
                'judul'                 => $this->input->post('judul'),
                'tahun'                 => $this->input->post('tahun'),
                'semester'              => $this->input->post('semester'),
            );
            if ($_FILES['file_cover']['error'] != 4) {
                $config['upload_path'] = $this->imagePath;
                $config['allowed_types'] = 'pdf';
                $config['max_size'] = '2048';
                $this->load->library('upload', $config);

                if ($this->upload->do_upload("file_cover")) {
                    $image = $this->upload->data();
                    $params['filename_cover'] = $image['file_name'];
                    $params['image_cover'] = $this->imagePath . $image['file_name'];
                } else {
                    $error = array('error' => $this->upload->display_errors());
                    $data['error_upload'] = '<div class="alert alert-danger alert-dismissable">
                                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>' . $error['error'] . '</div>';
                    $this->template->load('layout', 'insert', $data);
                    $this->session->set_flashdata('message', '<div class="alert alert-danger">
                                <button class="close" data-dismiss="alert"> × </button>
                                <i class="fa fa-check-circle"></i>
                                <strong> Pengajuan gagal dikirim!!! </strong>
                            </div>');
                    return false;
                }
            }
            if ($_FILES['file_pengesahan']['error'] != 4) {
                $config['upload_path'] = $this->imagePath;
                $config['allowed_types'] = 'pdf';
                $config['max_size'] = '2048';
                $this->load->library('upload', $config);

                if ($this->upload->do_upload("file_pengesahan")) {
                    $image_pengesahan = $this->upload->data();
                    $params['filename_pengesahan'] = $image_pengesahan['file_name'];
                    $params['image_pengesahan'] = $this->imagePath . $image_pengesahan['file_name'];
                } else {
                    $error = array('error' => $this->upload->display_errors());
                    $data['error_upload_pengesahan'] = '<div class="alert alert-danger alert-dismissable">
                                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>' . $error['error'] . '</div>';
                    $data['tahun']  = $data['config']['tahun'];
                    $this->template->load('layout', 'insert', $data);
                    $this->session->set_flashdata('message', '<div class="alert alert-danger">
                                <button class="close" data-dismiss="alert"> × </button>
                                <i class="fa fa-check-circle"></i>
                                <strong> Pengajuan gagal dikirim!!! </strong>
                            </div>');
                    return false;
                }
            }
            $this->uploadmodels->update($id, $params);
            $this->db->trans_complete();
            $this->session->set_flashdata('message', '<div class="alert alert-success">
                                            <button class="close" data-dismiss="alert"> × </button>
                                            <i class="fa fa-check-circle"></i>
                                            <strong> Data Laporan Berhasil tambahkan </strong>
                                        </div>');
            redirect('upload');
        }
        // }
    }


    /*
     * function untuk menghapus data pembayaran
     */
    function delete()
    {
        $this->ion_auth->is_allow('upload/' . __FUNCTION__);
        $id = $this->uri->segment(3);
        $this->uploadmodels->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button> Data Berhasil Dihapus. </div>');
        redirect('upload');
    }

    /*
     * download file
     */
    function download_cover()
    {
        $this->load->helper('download');
        $id = $this->uri->segment(3, FALSE);
        if ($id == FALSE) {
            redirect('home', 'refresh');
        }
        if (is_numeric($id) == FALSE) {
            redirect('home', 'refresh');
        }
        if ($this->uploadmodels->cekFile($id) == FALSE) {
            redirect('home', 'refresh');
        }
        $file = $this->uploadmodels->getFileInfo($id);
        $full_path = $file['full_path'];
        $name = $file['name'];
        $data = file_get_contents($full_path);
        force_download($name, $data);
    }

    function download_pengesahan()
    {
        $this->load->helper('download');
        $id = $this->uri->segment(3, FALSE);
        if ($id == FALSE) {
            redirect('home', 'refresh');
        }
        if (is_numeric($id) == FALSE) {
            redirect('home', 'refresh');
        }
        if ($this->uploadmodels->cekFile($id) == FALSE) {
            redirect('home', 'refresh');
        }
        $file = $this->uploadmodels->getFileInfo_pengesahan($id);
        $full_path = $file['full_path'];
        $name = $file['name'];
        $data = file_get_contents($full_path);
        force_download($name, $data);
    }
}
