<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Kerjapraktek extends MX_Controller
{
    var $imagePath = 'files/kerjapraktek/';
    function __construct()
    {
        parent::__construct();
        $this->load->model(array('kerjapraktekmodels', 'akademikmodels', 'configmodels'));
        $this->template->set('title', '<i class="fa text-success"> Kerja Praktek </i>');
        // $this->output->enable_profiler(TRUE);
    }

    public function index()
    {
        $this->ion_auth->is_allow('daftar/kerjapraktek');
        $id_groups = $this->session->userdata('group_id');
        $this->load->model('configmodels');
        if ($id_groups == '5') {
            $nim = $this->session->userdata('username');
            $cek = $this->kerjapraktekmodels->cek_kp($nim);
            $data['config'] = $this->configmodels->config();
            if ($cek) {
                $data['cek'] = $cek;
                $data['kp'] = $this->kerjapraktekmodels->pend_kp_mhs($nim);
                $this->template->load('layout', 'kp/views', $data);
            } else {
                $data['profile'] = $this->akademikmodels->biodata($nim);
                $data['akademik'] = $this->akademikmodels->data_studi($nim);
                $data['krs'] = $this->akademikmodels->cek_krs_kp($nim);
                $data['dosen'] = $this->akademikmodels->dosen();
                $data['tahun']  = $data['config']['tahun'];
                $data['pembayaran'] = $this->akademikmodels->cek_pembayaran_kp($nim, $data['config']['tahun'], $data['config']['semester']);
                $this->template->load('layout', 'kp/form_kp', $data);
            }
        } else {
            $data['kp'] = $this->kerjapraktekmodels->pend_kp();
            $this->template->load('layout', 'kp/views_all', $data);
        }
    }

    public function insert()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('judul', 'Judul', 'trim|required', array('required' => '%s Harus Diisi.'));
        $this->form_validation->set_rules('lokasi', 'Lokasi', 'trim|required', array('required' => '%s Harus Diisi.'));
        $this->form_validation->set_rules('alamat_kp', 'Rencana Alamat Lokasi Kerja Pratek', 'trim|required', array('required' => '%s Harus Diisi.'));
        $this->form_validation->set_rules('alamat_dihub', 'Alamat Yang Bisa Dihubungi', 'trim|required', array('required' => '%s Harus Diisi.'));
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
            $this->template->load('layout', 'kp/form_kp', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-danger">
            <button class="close" data-dismiss="alert"> × </button>
            <i class="fa fa-check-circle"></i>
            <strong> Pengajuan gagal dikirim!!! </strong>
        </div>');
        } else {
            $judul = $this->input->post('judul');
            if ($this->kerjapraktekmodels->isjudulExists($judul)) {
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
                'lokasi'                => $this->input->post('lokasi'),
                'alamat_kp'             => $this->input->post('alamat_kp'),
                'alamat_dihub'          => $this->input->post('alamat_dihub'),
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
                    $params['filename'] = $image['file_name'];
                    $params['image'] = $this->imagePath . $image['file_name'];
                } else {
                    $data['profile'] = $this->akademikmodels->biodata($nim);
                    $data['akademik'] = $this->akademikmodels->data_studi($nim);
                    $data['krs'] = $this->akademikmodels->cek_krs_kp($nim);
                    $data['dosen'] = $this->akademikmodels->dosen();
                    $error = array('error' => $this->upload->display_errors());
                    $data['error_upload'] = '<div class="alert alert-danger alert-dismissable">
                                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>' . $error['error'] . '</div>';
                    $this->template->load('layout', 'kp/form_kp', $data);
                    $this->session->set_flashdata('message', '<div class="alert alert-danger">
                                <button class="close" data-dismiss="alert"> × </button>
                                <i class="fa fa-check-circle"></i>
                                <strong> Pengajuan gagal dikirim!!! </strong>
                            </div>');
                    return false;
                }
            }
            $id = $this->kerjapraktekmodels->insert($params);

            $dosen = array(
                'id_kp' => $id,
                'id_dosen1' => $this->input->post('dosen1'),
                'id_dosen2' => $this->input->post('dosen2')
            );
            $this->kerjapraktekmodels->insert_dosen_pembimbing($dosen);
            $this->db->trans_complete();
            redirect('daftar/kerjapraktek/success/' . $id);
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
            $data['pengajuan'] = $this->kerjapraktekmodels->findbyid($id);
            $data['dosen'] = $this->akademikmodels->dosen();
            $this->template->load('layout', 'kp/form_update', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-danger">
            <button class="close" data-dismiss="alert"> × </button>
            <i class="fa fa-check-circle"></i>
            <strong> Pengajuan gagal dikirim!!! </strong>
        </div>');
        } else {
            $this->db->trans_start();
            $params = array(
                'nim'                   => $nim,
                'nama'                  => $this->session->userdata('nama'),
                'judul'                 => $this->input->post('judul'),
                'lokasi'                => $this->input->post('lokasi'),
                'alamat_kp'             => $this->input->post('alamat_kp'),
                'alamat_dihub'          => $this->input->post('alamat_dihub'),
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
                    $params['filename'] = $image['file_name'];
                    $params['image'] = $this->imagePath . $image['file_name'];
                } else {
                    $data['profile'] = $this->akademikmodels->biodata($nim);
                    $data['akademik'] = $this->akademikmodels->data_studi($nim);
                    $data['krs'] = $this->akademikmodels->cek_krs_kp($nim);
                    $data['dosen'] = $this->akademikmodels->dosen();
                    $error = array('error' => $this->upload->display_errors());
                    $data['error_upload'] = '<div class="alert alert-danger alert-dismissable">
                                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>' . $error['error'] . '</div>';
                    $this->template->load('layout', 'kp/form_kp', $data);
                    $this->session->set_flashdata('message', '<div class="alert alert-danger">
                                <button class="close" data-dismiss="alert"> × </button>
                                <i class="fa fa-check-circle"></i>
                                <strong> Pengajuan gagal dikirim!!! </strong>
                            </div>');
                    return false;
                }
            }
            $this->kerjapraktekmodels->update($id, $params);

            $this->db->query("delete from pembimbing_kp where id_kp = '$id'");
            $dosen = array(
                'id_kp' => $id,
                'id_dosen1' => $this->input->post('dosen1'),
                'id_dosen2' => $this->input->post('dosen2')
            );
            $this->kerjapraktekmodels->insert_dosen_pembimbing($dosen);
            $this->db->trans_complete();
            $this->session->set_flashdata('message', '<div class="alert alert-success">
                                            <button class="close" data-dismiss="alert"> × </button>
                                            <i class="fa fa-check-circle"></i>
                                            <strong> Data User Berhasil tambahkan </strong>
                                        </div>');
            redirect('daftar/kerjapraktek');
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
            $data['pengajuan'] = $this->kerjapraktekmodels->findbyid($id);
            $data['profile'] = $this->akademikmodels->biodata($data['pengajuan']['nim']);
            $data['akademik'] = $this->akademikmodels->data_studi($data['pengajuan']['nim']);
            $data['dosen'] = $this->akademikmodels->dosen();
            $this->template->load('layout', 'kp/form_persetujuan', $data);
        } else {
            $id_kp = $this->input->post('id_kp');
            $approv = $this->input->post('approv_kaprodi');
            $this->db->trans_start();
            $status1 = $this->input->post('status1');
            $status2 = $this->input->post('status2');
            if (($status1 == 't') && ($status2 == 't')) {
                $data['pengajuan'] = $this->kerjapraktekmodels->findbyid($id);
                $data['profile'] = $this->akademikmodels->biodata($data['pengajuan']['nim']);
                $data['akademik'] = $this->akademikmodels->data_studi($data['pengajuan']['nim']);
                $data['dosen'] = $this->akademikmodels->dosen();

                $this->session->set_flashdata('message', '<div class="alert alert-danger">
                    <button class="close" data-dismiss="alert"> × </button>
                    <i class="fa fa-check-circle"></i>
                    <strong> Hanya satu dosen yang diizinkan untuk menjadi dosen pembimbing </strong>
                </div>');
                $this->template->load('layout', 'kp/form_persetujuan', $data);
            } else {
                $this->db->query("update kerja_praktek set approv_kaprodi = '$approv' where id = '$id_kp'");

                $dosen = array(
                    'id_dosen1' => $this->input->post('dosen1'),
                    'id_dosen2' => $this->input->post('dosen2'),
                    'status1' => $status1,
                    'status2' => $status2,
                );
                $this->kerjapraktekmodels->update_dosen_pembimbing($id_kp, $dosen);

                $skkp = array(
                    'id_kp'     => $id_kp,
                    'no_sk'     => $this->input->post('no_sk'),
                    'tgl_awal'  => $this->input->post('tgl_awal'),
                    'tgl_akhir' => $this->input->post('tgl_akhir'),
                );
                $this->kerjapraktekmodels->insert_sk_kp($skkp);
                $this->db->trans_complete();
                $this->session->set_flashdata('message', '<div class="alert alert-success">
                                                <button class="close" data-dismiss="alert"> × </button>
                                                <i class="fa fa-check-circle"></i>
                                                <strong> Data User Berhasil tambahkan </strong>
                                            </div>');

                redirect('daftar/kerjapraktek');
            }
        }
    }

    function success()
    {
        $nim = $this->session->userdata('username');
        $id = $this->uri->segment(4);
        $data['profile'] = $this->akademikmodels->biodata($nim);
        $data['akademik'] = $this->akademikmodels->data_studi($nim);
        $data['pengajuan'] = $this->kerjapraktekmodels->findbyid($id);
        $this->template->load('layout', 'kp/success', $data);
    }

    /*
    * detail kp
    */
    function detail()
    {
        $id = $this->input->post('id');
        $data['pengajuan'] = $this->kerjapraktekmodels->findbyid($id);
        $data['profile'] = $this->akademikmodels->biodata($data['pengajuan']['nim']);
        $data['akademik'] = $this->akademikmodels->data_studi($data['pengajuan']['nim']);
        $this->load->view('kp/detail', $data);
    }

    /*
     * detail file 
     */
    function detail_file()
    {
        $id = $this->input->post('id_file');
        $data['file'] = $this->kerjapraktekmodels->find_id_file($id);
        $this->load->view('kp/detail_file', $data);
    }

    /*
     * download file
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
        if ($this->kerjapraktekmodels->cekFile($id) == FALSE) {
            redirect('home', 'refresh');
        }
        $file = $this->kerjapraktekmodels->getFileInfo($id);
        $full_path = $file['full_path'];
        $name = $file['name'];
        $data = file_get_contents($full_path);
        force_download($name, $data);
    }
}
