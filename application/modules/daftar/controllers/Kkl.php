<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Kkl extends MX_Controller
{
    var $imagePath = 'files/kkl/';
    function __construct()
    {
        parent::__construct();
        $this->load->model(array('kklmodels', 'akademikmodels', 'configmodels'));
        $this->template->set('title', '<i class="fa text-success"> Kuliah Kerja Lapangan </i>');
        // $this->output->enable_profiler(TRUE);
    }

    public function index()
    {
        $this->ion_auth->is_allow('daftar/kkl');
        $id_groups = $this->session->userdata('group_id');
        $this->load->model('configmodels');
        if ($id_groups == '5') {
            $data['config'] = $this->configmodels->config();
            $nim = $this->session->userdata('username');
            $cek = $this->kklmodels->cek_kkl($nim);
            if ($cek) {
                if ($cek['kategori'] = 'i') {
                    $cek = $this->kklmodels->cek_kkl_individu($nim);
                } else {
                    $cek = $this->kklmodels->cek_kkl_individu($nim);
                }
                $data['cek'] = $cek;
                $data['kkl'] = $this->kklmodels->pend_kkl_mhs($nim);
                $this->template->load('layout', 'kkl/views', $data);
            } else {
                $data['profile'] = $this->akademikmodels->biodata($nim);
                $data['akademik'] = $this->akademikmodels->data_studi($nim);
                $data['krs'] = $this->akademikmodels->cek_krs_kkl($nim, $data['config']['tahun'], $data['config']['semester']);
                $data['tahun']  = $data['config']['tahun'];
                $data['pembayaran'] = $this->akademikmodels->cek_pembayaran_kkl($nim, $data['config']['tahun'], $data['config']['semester']);
                $this->template->load('layout', 'kkl/form_kkl', $data);
            }
        } else {
            $data['kkl'] = $this->kklmodels->pend_kkl();
            $this->template->load('layout', 'kkl/views_all', $data);
        }
    }

    public function kkl_individu()
    {
        $data['kkl'] = $this->kklmodels->pend_kkl_individu();
        $this->template->load('layout', 'kkl/views_individu', $data);
    }

    public function kkl_kelompok()
    {
        $this->load->model('kelompok/kelompokmodels');
        $data['kkl'] = $this->kklmodels->pend_kkl_kelompok();
        $data['kelompok'] = $this->kelompokmodels->get_all_kelompok();
        $this->template->load('layout', 'kkl/views_kelompok', $data);
    }

    public function insert()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('judul', 'Judul', 'trim|required', array('required' => '%s Harus Diisi.'));
        $this->form_validation->set_rules('lokasi', 'Lokasi', 'trim|required', array('required' => '%s Harus Diisi.'));
        $this->form_validation->set_rules('alamat_kkl', 'Rencana Alamat Lokasi KKL', 'trim|required', array('required' => '%s Harus Diisi.'));
        $this->form_validation->set_rules('alamat_dihub', 'Alamat Yang Bisa Dihubungi', 'trim|required', array('required' => '%s Harus Diisi.'));
        $this->form_validation->set_rules('telpon', 'Telpon', 'trim|required|min_length[10]|max_length[15]', array('required' => '%s Harus Diisi.', 'min_length' => 'Nomor %s setidaknya paling sedikit %s karakter.', 'max_length' => 'Nomor %s tidak boleh melebihi %s karakter.'));
        $this->form_validation->set_rules('tahun', 'Tahun', 'trim|required', array('required' => '%s Harus Diisi.'));
        $this->form_validation->set_rules('semester', 'Semester', 'trim|required', array('required' => '%s Harus Diisi.'));
        $this->form_validation->set_rules('kategori', 'Kategori KKL', 'trim|required', array('required' => '%s Harus Diisi.'));
        $this->form_validation->set_rules('kemampuan', 'Kemampuan KKL', 'trim|required', array('required' => '%s Harus Diisi.'));
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissable">
                                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>', '</div>');

        $nim = $this->session->userdata('username');
        if ($this->form_validation->run() == FALSE) {
            $data['profile'] = $this->akademikmodels->biodata($nim);
            $data['akademik'] = $this->akademikmodels->data_studi($nim);
            $data['krs'] = $this->akademikmodels->cek_krs_kP($nim);
            $data['nim']   = $nim;
            $this->template->load('layout', 'kkl/form_kkl', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-danger">
            <button class="close" data-dismiss="alert"> × </button>
            <i class="fa fa-check-circle"></i>
            <strong> Pengajuan gagal dikirim!!! </strong>
        </div>');
        } else {
            $judul = $this->input->post('judul');
            if ($this->kklmodels->isjudulExists($judul)) {
                $data['profile'] = $this->akademikmodels->biodata($nim);
                $data['akademik'] = $this->akademikmodels->data_studi($nim);
                // $data['krs'] = $this->akademikmodels->cek_krs_kkl($nim);
                $data['nim']   = $nim;
                $this->session->set_flashdata('message', '<div class="alert alert-danger">
                                            <button class="close" data-dismiss="alert"> × </button>
                                            <i class="fa fa-check-circle"></i>
                                            <strong> Judul dengan nama ' . $judul . ', Sudah digunakan!!! </strong>
                                        </div>');
                // $this->load->view('form_kkl', $data);
                $this->template->load('layout', 'kkl/form_kkl', $data);
            } else {
                $this->db->trans_start();
                $params = array(
                    'nim'                   => $nim,
                    'nama'                  => $this->session->userdata('nama'),
                    'judul'                 => $this->input->post('judul'),
                    'lokasi'                => $this->input->post('lokasi'),
                    'alamat_kkl'            => $this->input->post('alamat_kkl'),
                    'alamat_dihub'          => $this->input->post('alamat_dihub'),
                    'telpon'                => $this->input->post('telpon'),
                    'tahun'                 => $this->input->post('tahun'),
                    'semester'              => $this->input->post('semester'),
                    'kategori'              => $this->input->post('kategori'),
                    'kelas'                 => $this->input->post('kelas'),
                    'kemampuan'             => $this->input->post('kemampuan'),
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
                        $data['krs'] = $this->akademikmodels->cek_krs_kkl($nim);
                        $error = array('error' => $this->upload->display_errors());
                        $data['error_upload'] = '<div class="alert alert-danger alert-dismissable">
                                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>' . $error['error'] . '</div>';
                        $this->template->load('layout', 'kkl/form_kkl', $data);
                        $this->session->set_flashdata('message', '<div class="alert alert-danger">
                                <button class="close" data-dismiss="alert"> × </button>
                                <i class="fa fa-check-circle"></i>
                                <strong> Pengajuan gagal dikirim!!! </strong>
                            </div>');
                        return false;
                    }
                }
                $id = $this->kklmodels->insert($params);
                $this->db->trans_complete();
                $this->session->set_flashdata('message', '<div class="alert alert-success">
                                            <button class="close" data-dismiss="alert"> × </button>
                                            <i class="fa fa-check-circle"></i>
                                            <strong> Data User Berhasil tambahkan </strong>
                                        </div>');
            }
            redirect('daftar/kkl/success/' . $id);
        }
    }

    function update()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('judul', 'Judul', 'trim|required', array('required' => '%s Harus Diisi.'));
        // $this->form_validation->set_rules('lokasi', 'Lokasi', 'trim|required', array('required' => '%s Harus Diisi.'));
        // $this->form_validation->set_rules('alamat_kkl', 'Rencana Alamat Lokasi Kerja Pratek', 'trim|required', array('required' => '%s Harus Diisi.'));
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
            $data['pengajuan'] = $this->kklmodels->findbyid($id);
            $data['dosen'] = $this->akademikmodels->dosen();
            $this->template->load('layout', 'kkl/form_update', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-danger">
            <button class="close" data-dismiss="alert"> × </button>
            <i class="fa fa-check-circle"></i>
            <strong> Pengajuan gagal dikirim!!! </strong>
        </div>');
        } else {
            // $judul = $this->input->post('judul');
            // if ($this->kklmodels->isjudulExists($judul)) {
            //     $data['profile'] = $this->akademikmodels->biodata($nim);
            //     $data['akademik'] = $this->akademikmodels->data_studi($nim);
            //     $data['krs'] = $this->akademikmodels->cek_krs_kkl($nim);
            //     $data['dosen'] = $this->akademikmodels->dosen();
            //     $data['nim']   = $nim;
            //     $this->session->set_flashdata('message', '<div class="alert alert-danger">
            //                                 <button class="close" data-dismiss="alert"> × </button>
            //                                 <i class="fa fa-check-circle"></i>
            //                                 <strong> Judul dengan nama ' . $judul . ', Sudah digunakan!!! </strong>
            //                             </div>');
            //     // $this->load->view('form_kkl', $data);
            //     $this->template->load('layout', 'kkl/form_kkl', $data);
            // } else {
            $this->db->trans_start();
            $params = array(
                'nim'                   => $nim,
                'nama'                  => $this->session->userdata('nama'),
                'judul'                 => $this->input->post('judul'),
                'lokasi'                => $this->input->post('lokasi'),
                'alamat_kkl'            => $this->input->post('alamat_kkl'),
                'alamat_dihub'          => $this->input->post('alamat_dihub'),
                'telpon'                => $this->input->post('telpon'),
                'tahun'                 => $this->input->post('tahun'),
                'semester'              => $this->input->post('semester'),
                'kategori'              => $this->input->post('kategori'),
                'kelas'                 => $this->input->post('kelas'),
                'kemampuan'             => $this->input->post('kemampuan'),
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
                    $error = array('error' => $this->upload->display_errors());
                    $data['error_upload'] = '<div class="alert alert-danger alert-dismissable">
                                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>' . $error['error'] . '</div>';
                    $this->template->load('layout', 'kkl/form_kkl', $data);
                    $this->session->set_flashdata('message', '<div class="alert alert-danger">
                                <button class="close" data-dismiss="alert"> × </button>
                                <i class="fa fa-check-circle"></i>
                                <strong> Pengajuan gagal dikirim!!! </strong>
                            </div>');
                    return false;
                }
            }
            $this->kklmodels->update($id, $params);
            $this->db->trans_complete();
            $this->session->set_flashdata('message', '<div class="alert alert-success">
                                            <button class="close" data-dismiss="alert"> × </button>
                                            <i class="fa fa-check-circle"></i>
                                            <strong> Data Berhasil tambahkan </strong>
                                        </div>');
            redirect('daftar/kkl');
        }
        // }
    }

    // function persetujuan kaprodi
    public function persetujuan()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('id_dosen', 'Dosen Pembimbing', 'trim|required', array('required' => '%s Harus Diisi.'));
        $this->form_validation->set_rules('no_sk', 'No SK', 'trim|required', array('required' => '%s Harus Diisi.'));
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissable">
                                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>', '</div>');

        $id = base64_decode(urldecode($this->uri->segment(4)));
        if ($this->form_validation->run() == FALSE) {
            $data['pengajuan'] = $this->kklmodels->findbyid($id);
            $data['profile'] = $this->akademikmodels->biodata($data['pengajuan']['nim']);
            $data['akademik'] = $this->akademikmodels->data_studi($data['pengajuan']['nim']);
            $data['dosen'] = $this->akademikmodels->dosen();
            $this->template->load('layout', 'kkl/form_persetujuan', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-danger">
                    <button class="close" data-dismiss="alert"> × </button>
                    <i class="fa fa-check-circle"></i>
                    <strong> Pengajuan gagal dikirim!!! </strong>
                </div>');
        } else {
            $id_kkl = $this->input->post('id_kkl');
            $approv = $this->input->post('approv_wakademik');
            $this->db->trans_start();
            $this->db->query("update kkl set approv_wakademik = '$approv' where id = '$id_kkl'");

            $dosen = array(
                'id_kkl' => $id_kkl,
                'id_dosen' => $this->input->post('id_dosen'),
                'no_sk'     => $this->input->post('no_sk'),
                'tgl_awal'  => $this->input->post('tgl_awal'),
                'tgl_akhir' => $this->input->post('tgl_akhir'),
            );
            $this->kklmodels->insert_dosen_pembimbing($dosen);
            $this->db->trans_complete();
            $this->session->set_flashdata('message', '<div class="alert alert-success">
                                            <button class="close" data-dismiss="alert"> × </button>
                                            <i class="fa fa-check-circle"></i>
                                            <strong> Data User Berhasil tambahkan </strong>
                                        </div>');

            redirect('daftar/kkl/kkl_individu');
        }
    }

    function success()
    {
        $nim = $this->session->userdata('username');
        $id = $this->uri->segment(4);
        $data['profile'] = $this->akademikmodels->biodata($nim);
        $data['akademik'] = $this->akademikmodels->data_studi($nim);
        $data['pengajuan'] = $this->kklmodels->findbyid($id);
        $this->template->load('layout', 'kkl/success', $data);
    }

    /*
    * detail kp
    */
    function detail()
    {
        $id = $this->input->post('id');
        $data['pengajuan'] = $this->kklmodels->findbyid($id);
        $data['profile'] = $this->akademikmodels->biodata($data['pengajuan']['nim']);
        $data['akademik'] = $this->akademikmodels->data_studi($data['pengajuan']['nim']);
        $this->load->view('kkl/detail', $data);
    }

    /*
     * detail file 
     */
    function detail_file()
    {
        $id = $this->input->post('id_file');
        $data['file'] = $this->kklmodels->find_id_file($id);
        $this->load->view('kkl/detail_file', $data);
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
        if ($this->kklmodels->cekFile($id) == FALSE) {
            redirect('home', 'refresh');
        }
        $file = $this->kklmodels->getFileInfo($id);
        $full_path = $file['full_path'];
        $name = $file['name'];
        $data = file_get_contents($full_path);
        force_download($name, $data);
    }

    /*
     * input kelompok
     */
    function set_kelompok()
    {
        $kelompok = $this->input->post('id_kelompok');
        list($id_kelompok, $id_kkl, $nim, $tahun, $semester) = explode(":", $kelompok);
        $kelompok_kkl = $this->kklmodels->findKelompok($id_kelompok, $tahun, $semester);
        $cek_mhs = $this->kklmodels->viewKelompok($nim);
        if (is_null($kelompok_kkl)) {
            $data = array(
                'id_kelompok' => $id_kelompok,
                'tahun' => $tahun,
                'semester' => $semester
            );
            $id_kelompokkkl = $this->kklmodels->insert_kelompok_kkl($data);
            $this->db->query("insert into kelompok_mhs (nim,id_kkl,id_kelompok_kkl) values ('$nim','$id_kkl',' $id_kelompokkkl')");

            $query = $this->kklmodels->viewKelompok($nim);
            $this->db->query("update kkl set approv_wakademik = 't' where id = '$id_kkl'");
            echo '<font size="4" color="red">' . $query['nm_kelompok'] . '</font>';
        } else {
            $id_kelompok_kkl = $kelompok_kkl['id'];
            if (!is_null($cek_mhs)) {
                $this->db->query("update kelompok_mhs set id_kelompok_kkl = '$id_kelompok_kkl' where nim = '$nim'");
            } else {
                $this->db->query("insert into kelompok_mhs (nim,id_kkl,id_kelompok_kkl) values ('$nim','$id_kkl',' $id_kelompok_kkl')");
            }
            $query = $this->kklmodels->viewKelompok($nim);
            $this->db->query("update kkl set approv_wakademik = 't' where id = '$id_kkl'");
            echo '<font size="4" color="red">' . $query['nm_kelompok'] . '</font>';
        }
    }

    /*
     * input kelompok
     */
    function set_ketua()
    {
        $ketua = $this->input->post('ketua');
        list($nim, $status) = explode(":", $ketua);
        $cek = $this->db->query("select * from kelompok_mhs where nim = '$nim'")->row_array();
        if (!is_null($cek)) {
            $this->db->query("update kelompok_mhs set ketua = '$status' where nim = '$nim'");
            $query = $this->kklmodels->viewKelompok($nim);
            $stat = ($query['ketua'] == 't') ? 'Ketua' : '';
            echo '<font size="4" color="blue">' . $stat . '</font>';
        } else {
            echo '<font size="4" color="red">kelompok belum di set</font>';
        }
    }
}
