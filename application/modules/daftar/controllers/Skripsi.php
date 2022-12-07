<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Skripsi extends MX_Controller
{
    var $imagePath = 'files/skripsi/';
    function __construct()
    {
        parent::__construct();
        $this->load->model(array('skripsimodels', 'akademikmodels'));
        $this->template->set('title', '<i class="fa text-success"> Skripsi </i>');
        // $this->output->enable_profiler(TRUE);
    }

    public function index()
    {
        $this->ion_auth->is_allow('daftar/skripsi');
        $this->load->model('configmodels');
        $id_groups = $this->session->userdata('group_id');
        if ($id_groups == '5') {
            $nim = $this->session->userdata('username');
            $cek = $this->skripsimodels->cek_skripsi($nim);
            if ($cek) {
                $data['cek'] = $cek;
                $data['kp'] = $this->skripsimodels->pend_skripsi_mhs($nim);
                $data['config'] = $this->configmodels->config();
                $this->template->load('layout', 'skripsi/views', $data);
            } else {
                $data['profile'] = $this->akademikmodels->biodata($nim);
                $data['akademik'] = $this->akademikmodels->data_studi($nim);
                $data['krs'] = $this->akademikmodels->cek_krs_kp($nim);
                $data['dosen'] = $this->akademikmodels->dosen();
                $this->template->load('layout', 'skripsi/form_skripsi', $data);
            }
        } else {
            $data['kp'] = $this->skripsimodels->pend_skripsi();
            $this->template->load('layout', 'skripsi/views_all', $data);
        }
    }

    public function insert()
    {
        $this->ion_auth->is_allow('daftar/skripsi/' . __FUNCTION__);
        $this->load->library('form_validation');
        $this->form_validation->set_rules('judul', 'Judul', 'trim|required', array('required' => '%s Harus Diisi.'));
        $this->form_validation->set_rules('telpon', 'Telpon', 'trim|required|min_length[10]|max_length[15]', array('required' => '%s Harus Diisi.', 'min_length' => 'Nomor %s setidaknya paling sedikit %s karakter.', 'max_length' => 'Nomor %s tidak boleh melebihi %s karakter.'));
        $this->form_validation->set_rules('dosen1', 'Dosen Pembimbing', 'trim|required', array('required' => '%s Harus Diisi.'));
        $this->form_validation->set_rules('tahun', 'Tahun', 'trim|required', array('required' => '%s Harus Diisi.'));
        $this->form_validation->set_rules('semester', 'Semester', 'trim|required', array('required' => '%s Harus Diisi.'));
        $this->form_validation->set_rules('status_pendaftar', 'Status Pendaftar', 'trim|required', array('required' => '%s Harus Diisi.'));
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissable">
                                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>', '</div>');

        $nim = $this->session->userdata('username');
        if ($this->form_validation->run() == FALSE) {
            $data['profile'] = $this->akademikmodels->biodata($nim);
            $data['akademik'] = $this->akademikmodels->data_studi($nim);
            $data['krs'] = $this->akademikmodels->cek_krs_kp($nim);
            $data['dosen'] = $this->akademikmodels->dosen();
            $data['nim']   = $nim;
            $this->template->load('layout', 'skripsi/form_skripsi', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-danger">
            <button class="close" data-dismiss="alert"> × </button>
            <i class="fa fa-check-circle"></i>
            <strong> Pengajuan gagal dikirim!!! </strong>
        </div>');
        } else {
            $judul = $this->input->post('judul');
            if ($this->skripsimodels->isjudulExists($judul)) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger">
                                            <button class="close" data-dismiss="alert"> × </button>
                                            <i class="fa fa-check-circle"></i>
                                            <strong> Judul dengan nama ' . $judul . ', Sudah digunakan!!! </strong>
                                        </div>');
            }

            $this->db->trans_start();
            $params = array(
                'nim'                   => $nim,
                'nama'                  => $this->session->userdata('nama'),
                'judul'                 => $this->input->post('judul'),
                'telpon'                => $this->input->post('telpon'),
                'tahun'                 => $this->input->post('tahun'),
                'semester'              => $this->input->post('semester'),
                'status_pendaftar'      => $this->input->post('status_pendaftar'),
            );
            if ($_FILES['file_pendukung']['error'] != 4) {
                $config['upload_path'] = $this->imagePath;
                $config['allowed_types'] = 'pdf';
                $config['max_size'] = '2048';
                $this->load->library('upload', $config);

                if ($this->upload->do_upload("file_pendukung")) {
                    $image = $this->upload->data();
                    $params['filename_syarat'] = $image['file_name'];
                    $params['image_syarat'] = $this->imagePath . $image['file_name'];
                } else {
                    $data['profile'] = $this->akademikmodels->biodata($nim);
                    $data['akademik'] = $this->akademikmodels->data_studi($nim);
                    $data['krs'] = $this->akademikmodels->cek_krs_kp($nim);
                    $data['dosen'] = $this->akademikmodels->dosen();
                    $error = array('error' => $this->upload->display_errors());
                    $data['error_upload'] = '<div class="alert alert-danger alert-dismissable">
                                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>' . $error['error'] . '</div>';
                    $this->template->load('layout', 'skripsi/form_skripsi', $data);
                    $this->session->set_flashdata('message', '<div class="alert alert-danger">
                                <button class="close" data-dismiss="alert"> × </button>
                                <i class="fa fa-check-circle"></i>
                                <strong> Pengajuan gagal dikirim!!! </strong>
                            </div>');
                    return false;
                }
            }

            if ($_FILES['file_proposal']['error'] != 4) {
                $config['upload_path'] = $this->imagePath;
                $config['allowed_types'] = 'pdf';
                $config['max_size'] = '2048';
                $this->load->library('upload', $config);

                if ($this->upload->do_upload("file_proposal")) {
                    $image_proposal = $this->upload->data();
                    $params['filename_proposal'] = $image_proposal['file_name'];
                    $params['image_proposal'] = $this->imagePath . $image_proposal['file_name'];
                } else {
                    $data['profile'] = $this->akademikmodels->biodata($nim);
                    $data['akademik'] = $this->akademikmodels->data_studi($nim);
                    $data['krs'] = $this->akademikmodels->cek_krs_kp($nim);
                    $data['dosen'] = $this->akademikmodels->dosen();
                    $error = array('error' => $this->upload->display_errors());
                    $data['error_upload_proposal'] = '<div class="alert alert-danger alert-dismissable">
                                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>' . $error['error'] . '</div>';
                    $this->template->load('layout', 'skripsi/form_skripsi', $data);
                    $this->session->set_flashdata('message', '<div class="alert alert-danger">
                                <button class="close" data-dismiss="alert"> × </button>
                                <i class="fa fa-check-circle"></i>
                                <strong> Pengajuan gagal dikirim!!! </strong>
                            </div>');
                    return false;
                }
            }
            $id = $this->skripsimodels->insert($params);

            $dosen = array(
                'id_skripsi' => $id,
                'id_dosen1' => $this->input->post('dosen1'),
                'id_dosen2' => $this->input->post('dosen2')
            );
            $this->skripsimodels->insert_dosen_pembimbing($dosen);
            $this->db->trans_complete();
            $this->session->set_flashdata('message', '<div class="alert alert-success">
                                            <button class="close" data-dismiss="alert"> × </button>
                                            <i class="fa fa-check-circle"></i>
                                            <strong> Data Skripsi Berhasil tambahkan </strong>
                                        </div>');

            redirect('daftar/skripsi/success/' . $id);
        }
    }

    function update()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('judul', 'Judul', 'trim|required', array('required' => '%s Harus Diisi.'));
        // $this->form_validation->set_rules('lokasi', 'Lokasi', 'trim|required', array('required' => '%s Harus Diisi.'));
        // $this->form_validation->set_rules('alamat_kp', 'Rencana Alamat Lokasi Kerja Pratek', 'trim|required', array('required' => '%s Harus Diisi.'));
        // $this->form_validation->set_rules('alamat_dihub', 'Alamat Yang Bisa Dihubungi', 'trim|required', array('required' => '%s Harus Diisi.'));
        // $this->form_validation->set_rules('telpon', 'Telpon', 'trim|required|min_length[10]|max_length[15]', array('required' => '%s Harus Diisi.', 'min_length' => 'Nomor %s setidaknya paling sedikit %s karakter.', 'max_length' => 'Nomor %s tidak boleh melebihi %s karakter.'));
        // $this->form_validation->set_rules('dosen1', 'Dosen Pembimbing', 'trim|required', array('required' => '%s Harus Diisi.'));
        // $this->form_validation->set_rules('tahun', 'Tahun', 'trim|required', array('required' => '%s Harus Diisi.'));
        // $this->form_validation->set_rules('semester', 'Semester', 'trim|required', array('required' => '%s Harus Diisi.'));
        // $this->form_validation->set_rules('status_pendaftar', 'Status Pendaftar', 'trim|required', array('required' => '%s Harus Diisi.'));
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissable">
                                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>', '</div>');

        $nim = $this->session->userdata('username');
        $id = base64_decode(urldecode($this->uri->segment(4)));
        if ($this->form_validation->run() == FALSE) {
            $data['profile'] = $this->akademikmodels->biodata($nim);
            $data['akademik'] = $this->akademikmodels->data_studi($nim);
            $data['krs'] = $this->akademikmodels->cek_krs_kp($nim);
            $data['pengajuan'] = $this->skripsimodels->findbyid($id);
            $data['dosen'] = $this->akademikmodels->dosen();
            $this->template->load('layout', 'skripsi/form_update', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-danger">
            <button class="close" data-dismiss="alert"> × </button>
            <i class="fa fa-check-circle"></i>
            <strong> Pengajuan gagal dikirim!!! </strong>
        </div>');
        } else {
            // $judul = $this->input->post('judul');
            // if ($this->skripsimodels->isjudulExists($judul)) {
            //     $data['profile'] = $this->akademikmodels->biodata($nim);
            //     $data['akademik'] = $this->akademikmodels->data_studi($nim);
            //     $data['krs'] = $this->akademikmodels->cek_krs_kp($nim);
            //     $data['dosen'] = $this->akademikmodels->dosen();
            //     $data['nim']   = $nim;
            //     $this->session->set_flashdata('message', '<div class="alert alert-danger">
            //                                 <button class="close" data-dismiss="alert"> × </button>
            //                                 <i class="fa fa-check-circle"></i>
            //                                 <strong> Judul dengan nama ' . $judul . ', Sudah digunakan!!! </strong>
            //                             </div>');
            //     // $this->load->view('form_kp', $data);
            //     $this->template->load('layout', 'skripsi/form_skripsi', $data);
            // } else {
            $this->db->trans_start();
            $params = array(
                'nim'                   => $nim,
                'nama'                  => $this->session->userdata('nama'),
                'judul'                 => $this->input->post('judul'),
                'telpon'                => $this->input->post('telpon'),
                'tahun'                 => $this->input->post('tahun'),
                'semester'              => $this->input->post('semester'),
                'status_pendaftar'      => $this->input->post('status_pendaftar'),
            );
            if ($_FILES['file_pendukung']['error'] != 4) {
                $config['upload_path'] = $this->imagePath;
                $config['allowed_types'] = 'pdf';
                $config['max_size'] = '2048';
                $this->load->library('upload', $config);

                if ($this->upload->do_upload("file_pendukung")) {
                    $image = $this->upload->data();
                    $params['filename_syarat'] = $image['file_name'];
                    $params['image_syarat'] = $this->imagePath . $image['file_name'];
                } else {
                    $data['profile'] = $this->akademikmodels->biodata($nim);
                    $data['akademik'] = $this->akademikmodels->data_studi($nim);
                    $data['krs'] = $this->akademikmodels->cek_krs_kp($nim);
                    $data['dosen'] = $this->akademikmodels->dosen();
                    $data['pengajuan'] = $this->skripsimodels->findbyid($id);
                    $error = array('error' => $this->upload->display_errors());
                    $data['error_upload'] = '<div class="alert alert-danger alert-dismissable">
                                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>' . $error['error'] . '</div>';
                    $this->template->load('layout', 'skripsi/form_skripsi', $data);
                    $this->session->set_flashdata('message', '<div class="alert alert-danger">
                                <button class="close" data-dismiss="alert"> × </button>
                                <i class="fa fa-check-circle"></i>
                                <strong> Pengajuan gagal dikirim!!! </strong>
                            </div>');
                    return false;
                }
            }
            if ($_FILES['file_proposal']['error'] != 4) {
                $config['upload_path'] = $this->imagePath;
                $config['allowed_types'] = 'pdf';
                $config['max_size'] = '2048';
                $this->load->library('upload', $config);

                if ($this->upload->do_upload("file_proposal")) {
                    $image_proposal = $this->upload->data();
                    $params['filename_proposal'] = $image_proposal['file_name'];
                    $params['image_proposal'] = $this->imagePath . $image_proposal['file_name'];
                } else {
                    $data['profile'] = $this->akademikmodels->biodata($nim);
                    $data['akademik'] = $this->akademikmodels->data_studi($nim);
                    $data['krs'] = $this->akademikmodels->cek_krs_kp($nim);
                    $data['dosen'] = $this->akademikmodels->dosen();
                    $data['pengajuan'] = $this->skripsimodels->findbyid($id);
                    $error = array('error' => $this->upload->display_errors());
                    $data['error_upload_proposal'] = '<div class="alert alert-danger alert-dismissable">
                                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>' . $error['error'] . '</div>';
                    $this->template->load('layout', 'skripsi/form_skripsi', $data);
                    $this->session->set_flashdata('message', '<div class="alert alert-danger">
                            <button class="close" data-dismiss="alert"> × </button>
                            <i class="fa fa-check-circle"></i>
                            <strong> Pengajuan gagal dikirim!!! </strong>
                        </div>');
                    return false;
                }
            }
            $this->skripsimodels->update($id, $params);

            $this->db->query("delete from pembimbing_kp where id_skripsi = '$id'");
            $dosen = array(
                'id_skripsi' => $id,
                'id_dosen1' => $this->input->post('dosen1'),
                'id_dosen2' => $this->input->post('dosen2')
            );
            $this->skripsimodels->insert_dosen_pembimbing($dosen);
            $this->db->trans_complete();
            $this->session->set_flashdata('message', '<div class="alert alert-success">
                                            <button class="close" data-dismiss="alert"> × </button>
                                            <i class="fa fa-check-circle"></i>
                                            <strong> Data Skripsi Berhasil tambahkan </strong>
                                        </div>');
            redirect('daftar/skripsi');
        }
        // }
    }

    // function persetujuan kaprodi
    public function persetujuan()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('dosen1', 'Dosen Pembimbing Ke 1', 'trim|required', array('required' => '%s Harus Diisi.'));
        $this->form_validation->set_rules('status1', 'Status Dosen Pembimbing ke 1', 'trim|required', array('required' => '%s Harus Diisi.'));
        $this->form_validation->set_rules('no_sk', 'No SK', 'trim|required', array('required' => '%s Harus Diisi.'));
        $this->form_validation->set_rules('tgl_awal', 'Tanggal  Awal', 'trim|required', array('required' => '%s Harus Diisi.'));
        $this->form_validation->set_rules('tgl_akhir', 'Tanggal  Akhir', 'trim|required', array('required' => '%s Harus Diisi.'));
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissable">
                                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>', '</div>');

        $id = base64_decode(urldecode($this->uri->segment(4)));
        if ($this->form_validation->run() == FALSE) {
            $data['pengajuan'] = $this->skripsimodels->findbyid($id);
            $data['profile'] = $this->akademikmodels->biodata($data['pengajuan']['nim']);
            $data['akademik'] = $this->akademikmodels->data_studi($data['pengajuan']['nim']);
            $data['dosen'] = $this->akademikmodels->dosen();
            $this->template->load('layout', 'skripsi/form_persetujuan', $data);
        } else {
            $id_skripsi = $this->input->post('id_skripsi');
            $approv = $this->input->post('approv_kaprodi');
            $this->db->trans_start();
            $status1 = $this->input->post('status1');
            $status2 = $this->input->post('status2');
            if (($status1 == 't') && ($status2 == 't')) {
                $data['pengajuan'] = $this->skripsimodels->findbyid($id);
                $data['profile'] = $this->akademikmodels->biodata($data['pengajuan']['nim']);
                $data['akademik'] = $this->akademikmodels->data_studi($data['pengajuan']['nim']);
                $data['dosen'] = $this->akademikmodels->dosen();
                $this->session->set_flashdata('message', '<div class="alert alert-danger">
                    <button class="close" data-dismiss="alert"> × </button>
                    <i class="fa fa-check-circle"></i>
                    <strong> Hanya satu dosen yang diizinkan untuk menjadi dosen pembimbing </strong>
                </div>');
                $this->template->load('layout', 'skripsi/form_persetujuan', $data);
            } else {
                $this->db->query("update skripsi set approv_kaprodi = '$approv' where id = '$id_skripsi'");

                $dosen = array(
                    'id_dosen1' => $this->input->post('dosen1'),
                    'id_dosen2' => $this->input->post('dosen2'),
                    'status1' => $this->input->post('status1'),
                    'status2' => $this->input->post('status2')
                );
                $this->skripsimodels->update_dosen_pembimbing($id_skripsi, $dosen);

                $skkp = array(
                    'id_skripsi'     => $id_skripsi,
                    'no_sk'     => $this->input->post('no_sk'),
                    'tgl_awal'  => $this->input->post('tgl_awal'),
                    'tgl_akhir' => $this->input->post('tgl_akhir'),
                );
                $this->skripsimodels->insert_sk_skripsi($skkp);
                $this->db->trans_complete();
                $this->session->set_flashdata('message', '<div class="alert alert-success">
                                            <button class="close" data-dismiss="alert"> × </button>
                                            <i class="fa fa-check-circle"></i>
                                            <strong> Data Skripsi Berhasil tambahkan </strong>
                                        </div>');

                redirect('daftar/skripsi');
            }
        }
    }

    function success()
    {
        $nim = $this->session->userdata('username');
        $id = $this->uri->segment(4);
        $data['profile'] = $this->akademikmodels->biodata($nim);
        $data['akademik'] = $this->akademikmodels->data_studi($nim);
        $data['pengajuan'] = $this->skripsimodels->findbyid($id);
        $this->template->load('layout', 'skripsi/success', $data);
    }

    /*
    * detail kp
    */
    function detail()
    {
        $id = $this->input->post('id');
        $data['pengajuan'] = $this->skripsimodels->findbyid($id);
        $data['profile'] = $this->akademikmodels->biodata($data['pengajuan']['nim']);
        $data['akademik'] = $this->akademikmodels->data_studi($data['pengajuan']['nim']);
        $this->load->view('skripsi/detail', $data);
    }

    /*
     * detail file 
     */
    function detail_file_syarat()
    {
        $id = $this->input->post('id_file');
        $data['file'] = $this->skripsimodels->find_id_file($id);
        $this->load->view('skripsi/detail_file', $data);
    }
    /*
     * detail file proposal
     */
    function detail_file_proposal()
    {
        $id = $this->input->post('id_file');
        $data['file'] = $this->skripsimodels->find_id_file($id);
        $this->load->view('skripsi/detail_file_proposal', $data);
    }

    /*
     * download file syarat
     */
    function download()
    {
        $this->load->helper('download');
        $id = $this->uri->segment(4, FALSE);
        if ($id == FALSE) {
            redirect('home', 'refresh');
        }
        if (is_numeric($id) == FALSE) {
            redirect('home', 'refresh');
        }
        if ($this->skripsimodels->cekFile($id) == FALSE) {
            redirect('home', 'refresh');
        }
        $file = $this->skripsimodels->getFileInfo($id);
        $full_path = $file['full_path'];
        $name = $file['name'];
        $data = file_get_contents($full_path);
        force_download($name, $data);
    }

    /*
     * download file proposal
     */
    function download_proposal()
    {
        $this->load->helper('download');
        $id = $this->uri->segment(4, FALSE);
        if ($id == FALSE) {
            redirect('home', 'refresh');
        }
        if (is_numeric($id) == FALSE) {
            redirect('home', 'refresh');
        }
        if ($this->skripsimodels->cekFile($id) == FALSE) {
            redirect('home', 'refresh');
        }
        $file = $this->skripsimodels->getFileInfo_proposal($id);
        $full_path = $file['full_path'];
        $name = $file['name'];
        $data = file_get_contents($full_path);
        force_download($name, $data);
    }
}
