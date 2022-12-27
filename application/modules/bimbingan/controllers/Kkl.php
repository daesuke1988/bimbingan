<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class kkl extends MX_Controller
{
    var $imagePath = 'files/kkl/';
    function __construct()
    {
        parent::__construct();
        $this->load->model(array('kklmodels', 'akademikmodels'));
        $this->template->set('title', '<i class="fa text-success">Bimbingan Kuliah Kerja Lapang </i>');
        // $this->output->enable_profiler(TRUE);
    }

    function index()
    {
        $this->ion_auth->is_allow('bimbingan/kkl');
        $role = $this->session->userdata('group_id');
        if ($role == '1' || $role == '2' || $role == '3') {
            $data['bimbingan'] = $this->kklmodels->get_all();
            $this->template->load('layout', 'kkl/individu/views', $data);
        } elseif ($role == '4') {
            $this->template->load('layout', 'kkl/individu/views_dosen');
        } elseif ($role == '5') {
            $data['bimbingan'] = $this->kklmodels->get_mhs();
            $this->template->load('layout', 'kkl/individu/views_mhs', $data);
        }
    }

    function individu()
    {
        $this->ion_auth->is_allow('bimbingan/kkl/' . __FUNCTION__);
        $role = $this->session->userdata('group_id');
        if ($role == '1' || $role == '2' || $role == '3') {
            $data['bimbingan'] = $this->kklmodels->get_all();
            $this->template->load('layout', 'kkl/individu/views', $data);
        } elseif ($role == '4') {
            $data['bimbingan'] = $this->kklmodels->get_dosen();
            $this->template->load('layout', 'kkl/individu/views_dosen', $data);
        } elseif ($role == '5') {
            $data['bimbingan'] = $this->kklmodels->get_mhs();
            $this->template->load('layout', 'kkl/individu/views_mhs', $data);
        }
    }

    function bimbingan_individu()
    {
        // $this->ion_auth->is_allow('bimbingan/kkl/' . __FUNCTION__);
        $this->load->helper('tanggal');
        $data['id_kkl'] = base64_decode(urldecode($this->uri->segment(4)));
        $data['sk'] = $this->kklmodels->findbyidsk($data['id_kkl']);
        $data['approv'] = $this->kklmodels->cek_approv_individu($data['id_kkl']);
        $data['bimbingan'] = $this->kklmodels->bimbingan_individu($data['id_kkl']);
        $data['count'] = $this->kklmodels->count_bimbingan_individu($data['id_kkl']);
        $data['detail'] = $this->kklmodels->detail($data['id_kkl']);
        $data['role'] = $this->session->userdata('group_id');
        $data['id_userdosen'] = $this->akademikmodels->cek_id_user($data['detail']['npp_dosen']);
        $this->template->load('layout', 'kkl/individu/list_bimbingan', $data);
    }

    // membatalkan persetujuan bimbingan kuliah kerja nyata
    function unapprov()
    {
        $id_kp = base64_decode(urldecode($this->uri->segment(4)));
        $this->db->query("update kkl set approv_wakademik = NULL where id = '$id_kp'");
        $this->session->set_flashdata('message', '<div class="alert alert-success">
                                            <button class="close" data-dismiss="alert"> × </button>
                                            <i class="fa fa-check-circle"></i>
                                            <strong> KKL Berhasil Dibatalkan </strong>
                                        </div>');
        redirect('bimbingan/kkl');
    }

    function insert_individu()
    {
        $this->ion_auth->is_allow('bimbingan/kkl/' . __FUNCTION__);
        $this->load->library('form_validation');
        $this->form_validation->set_rules('catatan', 'Catatan', 'trim|required', array('required' => '%s Harus Diisi.'));
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissable">
                                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>', '</div>');

        $id_kkl = $this->input->post('id_kkl');
        if ($this->form_validation->run() == FALSE) {
            redirect('bimbingan/kkl/bimbingan_individu/' . urlencode(base64_encode($id_kkl)));
            $this->session->set_flashdata('message', '<div class="alert alert-danger">
            <button class="close" data-dismiss="alert"> × </button>
            <i class="fa fa-check-circle"></i>
            <strong> Bimbingan gagal dikirim!!! </strong>
        </div>');
        } else {
            $params = array(
                'id_kkl'                   => $id_kkl,
                'id_user'                 => $this->session->userdata('id_user'),
                'catatan'                 => $this->input->post('catatan'),
            );

            if ($_FILES['file_pendukung']['error'] != 4) {
                $config['upload_path'] = $this->imagePath;
                $config['allowed_types'] = 'pdf|doc|docx';
                $config['max_size'] = '5120';
                $this->load->library('upload', $config);

                if ($this->upload->do_upload("file_pendukung")) {
                    $image = $this->upload->data();
                    $params['filename'] = $image['file_name'];
                    $params['image'] = $this->imagePath . $image['file_name'];
                } else {
                    $error = array('error' => $this->upload->display_errors());
                    $data['error_upload'] = '<div class="alert alert-danger alert-dismissable">
                                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>' . $error['error'] . '</div>';
                    $this->session->set_flashdata('message', '<div class="alert alert-danger">
                                    <button class="close" data-dismiss="alert"> × </button>
                                    <i class="fa fa-check-circle"></i>
                                    <strong> Pengajuan gagal dikirim!!! </strong>
                                    </div>');
                    redirect('bimbingan/kkl/bimbingan_individu/' . urlencode(base64_encode($id_kkl)));
                    return false;
                }
            }
            $this->kklmodels->insert_individu($params);
            $this->session->set_flashdata('message', '<div class="alert alert-success">
                                            <button class="close" data-dismiss="alert"> × </button>
                                            <i class="fa fa-check-circle"></i>
                                            <strong> Bimbingan Berhasil dikirim </strong>
                                        </div>');
            redirect('bimbingan/kkl/bimbingan_individu/' . urlencode(base64_encode($id_kkl)));
        }
    }

    function insert_individu_dosenmhs()
    {
        // $this->ion_auth->is_allow('bimbingan/kkl/' . __FUNCTION__);
        $this->load->library('form_validation');
        $this->form_validation->set_rules('catatan', 'Catatan', 'trim|required', array('required' => '%s Harus Diisi.'));
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissable">
                                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>', '</div>');

        $id_kkl = $this->input->post('id_kkl');
        if ($this->form_validation->run() == FALSE) {
            redirect('bimbingan/kkl/bimbingan_individu/' . urlencode(base64_encode($id_kkl)));
            $this->session->set_flashdata('message', '<div class="alert alert-danger">
            <button class="close" data-dismiss="alert"> × </button>
            <i class="fa fa-check-circle"></i>
            <strong> Bimbingan gagal dikirim!!! </strong>
        </div>');
        } else {
            $params = array(
                'id_kkl'                   => $id_kkl,
                'id_user'                 => $this->input->post('xxx'),
                'catatan'                 => $this->input->post('catatan'),
            );

            if ($_FILES['file_pendukung']['error'] != 4) {
                $config['upload_path'] = $this->imagePath;
                $config['allowed_types'] = 'pdf|doc|docx';
                $config['max_size'] = '5120';
                $this->load->library('upload', $config);

                if ($this->upload->do_upload("file_pendukung")) {
                    $image = $this->upload->data();
                    $params['filename'] = $image['file_name'];
                    $params['image'] = $this->imagePath . $image['file_name'];
                } else {
                    $error = array('error' => $this->upload->display_errors());
                    $data['error_upload'] = '<div class="alert alert-danger alert-dismissable">
                                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>' . $error['error'] . '</div>';
                    $this->session->set_flashdata('message', '<div class="alert alert-danger">
                                    <button class="close" data-dismiss="alert"> × </button>
                                    <i class="fa fa-check-circle"></i>
                                    <strong> Pengajuan gagal dikirim!!! </strong>
                                    </div>');
                    redirect('bimbingan/kkl/bimbingan_individu/' . urlencode(base64_encode($id_kkl)));
                    return false;
                }
            }
            $this->kklmodels->insert_individu($params);
            $this->session->set_flashdata('message', '<div class="alert alert-success">
                                            <button class="close" data-dismiss="alert"> × </button>
                                            <i class="fa fa-check-circle"></i>
                                            <strong> Bimbingan Berhasil dikirim </strong>
                                        </div>');
            redirect('bimbingan/kkl/bimbingan_individu/' . urlencode(base64_encode($id_kkl)));
        }
    }

    function update_individu()
    {
        // $this->ion_auth->is_allow('bimbingan/kkl/' . __FUNCTION__);
        $this->load->library('form_validation');
        $this->form_validation->set_rules('catatan', 'Catatan', 'trim|required', array('required' => '%s Harus Diisi.'));
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissable">
                                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>', '</div>');

        $id_kkl = $this->input->post('id_kkl');
        $id_bimbingan = $this->input->post('id_bimbingan');
        if ($this->form_validation->run() == FALSE) {
            redirect('bimbingan/kkl/bimbingan_individu/' . urlencode(base64_encode($id_kkl)));
            $this->session->set_flashdata('message', '<div class="alert alert-danger">
            <button class="close" data-dismiss="alert"> × </button>
            <i class="fa fa-check-circle"></i>
            <strong> Bimbingan gagal dikirim!!! </strong>
        </div>');
        } else {
            $params = array(
                'id_kkl'                   => $id_kkl,
                'id_user'                 => $this->session->userdata('id_user'),
                'catatan'                 => $this->input->post('catatan'),
            );

            if ($_FILES['file_pendukung']['error'] != 4) {
                $config['upload_path'] = $this->imagePath;
                $config['allowed_types'] = 'pdf|doc|docx';
                $config['max_size'] = '5120';
                $this->load->library('upload', $config);

                if ($this->upload->do_upload("file_pendukung")) {
                    $image = $this->upload->data();
                    $params['filename'] = $image['file_name'];
                    $params['image'] = $this->imagePath . $image['file_name'];
                } else {
                    $error = array('error' => $this->upload->display_errors());
                    $data['error_upload'] = '<div class="alert alert-danger alert-dismissable">
                                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>' . $error['error'] . '</div>';
                    $this->session->set_flashdata('message', '<div class="alert alert-danger">
                                    <button class="close" data-dismiss="alert"> × </button>
                                    <i class="fa fa-check-circle"></i>
                                    <strong> Pengajuan gagal dikirim!!! </strong>
                                    </div>');
                    redirect('bimbingan/kkl/bimbingan_individu/' . urlencode(base64_encode($id_kkl)));
                    return false;
                }
            }
            $this->kklmodels->update_individu($id_bimbingan, $params);
            $this->session->set_flashdata('message', '<div class="alert alert-success">
                                            <button class="close" data-dismiss="alert"> × </button>
                                            <i class="fa fa-check-circle"></i>
                                            <strong> Bimbingan Berhasil dikirim </strong>
                                        </div>');
            redirect('bimbingan/kkl/bimbingan_individu/' . urlencode(base64_encode($id_kkl)));
        }
    }

    /*
     * menghapus data catatan bimbingan
     */
    function delete()
    {
        // $this->ion_auth->is_allow('users/' . __FUNCTION__);
        $id = $this->input->post('id');
        list($id_kkl, $id_bimbingan) = explode(":", $id);
        $this->kklmodels->delete($id_bimbingan);
        $this->session->set_flashdata('message', '<div class="alert alert-success">
                                            <button class="close" data-dismiss="alert"> × </button>
                                            <i class="fa fa-check-circle"></i>
                                            <strong> Bimbingan Berhasil dihapus </strong>
                                        </div>');

        redirect('bimbingan/kkl/bimbingan_individu/' . urlencode(base64_encode($id_kkl)));
    }

    // detail bimbingan kkl individu
    function detail()
    {
        // $this->ion_auth->is_allow('bimbingan/kkl/' . __FUNCTION__);
        $id_kkl = $this->input->post('id');
        $data['kkl'] = $this->kklmodels->detail($id_kkl);
        $this->load->view('kkl/individu/detail', $data);
    }

    // download file individu
    function download()
    {
        // $this->ion_auth->is_allow('bimbingan/kkl/' . __FUNCTION__);
        $this->load->helper('download');
        $id = $this->uri->segment(4, FALSE);
        $file = $this->kklmodels->getFileInfo($id);
        $full_path = $file['full_path'];
        $name = $file['name'];
        $data = file_get_contents($full_path);
        force_download($name, $data);
    }

    // download file bimbingan individu
    function download_file_bimbingan()
    {
        // $this->ion_auth->is_allow('bimbingan/kkl/' . __FUNCTION__);
        $this->load->helper('download');
        $id = $this->uri->segment(4, FALSE);
        $file = $this->kklmodels->getFileInfo_individu($id);
        $full_path = $file['full_path'];
        $name = $file['name'];
        $data = file_get_contents($full_path);
        force_download($name, $data);
    }

    function cetak_pdf_bimbingan_individu()
    {
        // $this->ion_auth->is_allow('bimbingan/kkl/' . __FUNCTION__);
        $this->load->library('pdf');
        $this->load->helper('tanggal');
        $id_kkl = base64_decode(urldecode($this->uri->segment(4)));
        $data['kkl'] = $this->kklmodels->detail_kkl_individu($id_kkl);
        $data['bimbingan'] = $this->kklmodels->bimbingan_individu($id_kkl);
        $html = $this->load->view('kkl/individu/cetak_pdf', $data, true);
        $this->pdf->createPDF($html, 'Dokumen_bimbingan', false);
    }

    // cetak sk per mhs
    function cetak_sk_mhs()
    {
        // $this->ion_auth->is_allow('bimbingan/kkl/' . __FUNCTION__);
        $this->load->library('pdf');
        $this->load->helper('tanggal');
        $id_kkl = base64_decode(urldecode($this->uri->segment(4)));
        $data['kkl'] = $this->kklmodels->detail_kkl_individu($id_kkl);
        $html = $this->load->view('kkl/individu/cetak_sk_mhs', $data, true);
        $this->pdf->createPDF($html, 'Surat_kontrak', false);
    }

    // bimbingan lanjut
    function lanjut()
    {
        $this->ion_auth->is_allow('bimbingan/kkl/' . __FUNCTION__);
        $id_kp = $this->input->post('id_kp');
        $this->db->query("update kerja_praktek set approv_kaprodi = null, status_pendaftar = '2' where id = '$id_kp'");
        $this->session->set_flashdata('message', '<div class="alert alert-success">
                                            <button class="close" data-dismiss="alert"> × </button>
                                            <i class="fa fa-check-circle"></i>
                                            <strong> Pengajuan Lanjut Bimbingan Berhasil dikirim </strong>
                                        </div>');
        redirect('daftar/kkl');
    }

    function acc_individu()
    {
        // $this->ion_auth->is_allow('bimbingan/kkl/' . __FUNCTION__);
        $id_kkl = $this->input->post('id_kkl');
        $this->db->query("update pembimbing_kkl set approv_dosen = 't', time_approv_dosen = now() where id_kkl = '$id_kkl'");
        redirect('bimbingan/kkl/bimbingan_individu/' . urlencode(base64_encode($id_kkl)));
    }

    function search()
    {
        // $this->ion_auth->is_allow('bimbingan/kkl/' . __FUNCTION__);
        $data['tahun'] = $this->input->post('tahun');
        $data['semester'] = $this->input->post('semester');
        $data['bimbingan'] = $this->kklmodels->get_all($data['tahun'], $data['semester']);
        $this->load->view('kkl/individu/result', $data);
    }

    function search_dosen()
    {
        // $this->ion_auth->is_allow('bimbingan/kkl/' . __FUNCTION__);
        $data['tahun'] = $this->input->post('tahun');
        $data['semester'] = $this->input->post('semester');
        $data['bimbingan'] = $this->kklmodels->get_dosen($data['tahun'], $data['semester']);
        $this->load->view('kkl/individu/result_dosen', $data);
    }

    function cetak_sk_individu()
    {
        // $this->ion_auth->is_allow('bimbingan/kkl/' . __FUNCTION__);
        $this->load->library('pdf');
        $this->load->helper('tanggal');
        $tahun = base64_decode(urldecode($this->uri->segment(4)));;
        $semester = base64_decode(urldecode($this->uri->segment(5)));;
        $data['bimbingan'] = $this->kklmodels->get_all($tahun, $semester);
        $html = $this->load->view('kkl/individu/cetak_sk_individu', $data, true);
        $this->pdf->createPDF($html, 'Surat_Kontrak', false);
    }

    // menampilkan dialog dosen pada bimbingan mhs
    function set_dialog_individu()
    {
        $id = $this->input->post('id');
        $confirm = $this->input->post('confirm');
        $detail_kp = $this->kklmodels->detail($id);
        if ($detail_kp['flag_open'] == 't') {
            $this->db->query("update pembimbing_kkl set flag_open = '$confirm' where id_kkl = '$id'");
        } else {
            $this->db->query("update pembimbing_kkl set flag_open = '$confirm' where id_kkl = '$id'");
        }
        redirect('bimbingan/kkl/bimbingan_individu/' . urlencode(base64_encode($id)));
    }
    // ================ kelompok ==============
    function kelompok()
    {
        $this->ion_auth->is_allow('bimbingan/kkl/' . __FUNCTION__);
        $role = $this->session->userdata('group_id');
        if ($role == '1' || $role == '2' || $role == '3') {
            $this->template->load('layout', 'kkl/kelompok/views');
        } elseif ($role == '4') {
            $this->template->load('layout', 'kkl/kelompok/views_dosen');
        } elseif ($role == '5') {
            $data['bimbingan'] = $this->kklmodels->get_mhs_kelompok();
            $this->template->load('layout', 'kkl/kelompok/views_mhs', $data);
        }
    }

    function search_kelompok()
    {
        // $this->ion_auth->is_allow('bimbingan/kkl/' . __FUNCTION__);
        $data['tahun'] = $this->input->post('tahun');
        $data['semester'] = $this->input->post('semester');
        $data['bimbingan'] = $this->kklmodels->get_all_kelompok($data['tahun'], $data['semester']);
        $this->load->view('kkl/kelompok/result_kelompok', $data);
    }

    // pencarian tahun dan semester dosen
    function search_dosen_kelompok()
    {
        // $this->ion_auth->is_allow('bimbingan/kkl/' . __FUNCTION__);
        $data['tahun'] = $this->input->post('tahun');
        $data['semester'] = $this->input->post('semester');
        $data['bimbingan'] = $this->kklmodels->get_dosen_kelompok($data['tahun'], $data['semester']);
        $this->load->view('kkl/kelompok/result_dosen', $data);
    }

    // setting dosen pembimbing
    function set_dosen()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('dosen', 'Dosen Pembimbing Kuliah Kerja Lapangan', 'trim|required', array('required' => '%s Harus Diisi.'));
        $this->form_validation->set_rules('no_sk', 'Nomor Surat Kontrak', 'trim|required', array('required' => '%s Harus Diisi.'));
        $this->form_validation->set_rules('tgl_awal', 'Tanggal Awal Surat Kontrak', 'trim|required', array('required' => '%s Harus Diisi.'));
        $this->form_validation->set_rules('tgl_akhir', 'Tanggal Akhir Surat Kontrak', 'trim|required', array('required' => '%s Harus Diisi.'));
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissable">
                                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>', '</div>');

        $id_kelompok = base64_decode(urldecode($this->uri->segment(4)));
        if ($this->form_validation->run() == FALSE) {
            $data['id_kelompok'] = $id_kelompok;
            $data['kkl'] = $this->kklmodels->findbyidkelompok($id_kelompok);
            $data['dosen'] = $this->akademikmodels->dosen();
            $this->template->load('layout', 'kkl/kelompok/result_setdosen', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-danger">
                    <button class="close" data-dismiss="alert"> × </button>
                    <i class="fa fa-check-circle"></i>
                    <strong> Data Pembimbing gagal dikirim!!! </strong>
                </div>');
        } else {
            $this->db->trans_start();
            $dosen = array(
                'id_dosen' => $this->input->post('dosen'),
                'no_sk'     => $this->input->post('no_sk'),
                'tgl_awal'  => $this->input->post('tgl_awal'),
                'tgl_akhir' => $this->input->post('tgl_akhir'),
            );
            $this->kklmodels->set_dosen($id_kelompok, $dosen);
            $this->db->trans_complete();
            $this->session->set_flashdata('message', '<div class="alert alert-success">
                                            <button class="close" data-dismiss="alert"> × </button>
                                            <i class="fa fa-check-circle"></i>
                                            <strong> Data User Berhasil tambahkan </strong>
                                        </div>');

            redirect('bimbingan/kkl/kelompok');
        }
    }

    // daftar kelompok kkl
    function daftar_peserta()
    {
        $id_kelompok_kkl = $this->input->post('id_kelompok');
        $data['daftar'] = $this->kklmodels->daftar_peserta($id_kelompok_kkl);
        $this->load->view('kkl/kelompok/daftar_peserta', $data);
    }

    // function bimbingan
    function bimbingan_kelompok()
    {
        $this->load->helper('tanggal');
        $data['id_kelompok_kkl'] = base64_decode(urldecode($this->uri->segment(4)));
        $data['sk'] = $this->kklmodels->findbyid_kelompok_kkl($data['id_kelompok_kkl']);
        $data['bimbingan'] = $this->kklmodels->bimbingan_kelompok($data['id_kelompok_kkl']);
        $data['approv'] = $this->kklmodels->cek_approv_kelompok($data['id_kelompok_kkl']);
        $data['count'] = $this->kklmodels->count_bimbingan_kelompok($data['id_kelompok_kkl']);
        $this->template->load('layout', 'kkl/kelompok/list_bimbingan_kelompok', $data);
    }

    // function insert bimbingan kelompok
    function insert_kelompok()
    {
        // $this->ion_auth->is_allow('bimbingan/kkl/' . __FUNCTION__);
        $this->load->library('form_validation');
        $this->form_validation->set_rules('catatan', 'Catatan', 'trim|required', array('required' => '%s Harus Diisi.'));
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissable">
                                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>', '</div>');

        $id_kelompok_kkl = $this->input->post('id_kelompok_kkl');
        if ($this->form_validation->run() == FALSE) {
            redirect('bimbingan/kkl/bimbingan_kelompok/' . urlencode(base64_encode($id_kelompok_kkl)));
            $this->session->set_flashdata('message', '<div class="alert alert-danger">
            <button class="close" data-dismiss="alert"> × </button>
            <i class="fa fa-check-circle"></i>
            <strong> Bimbingan gagal dikirim!!! </strong>
        </div>');
        } else {
            $params = array(
                'id_kelompok_kkl'   => $id_kelompok_kkl,
                'id_kategori'       => $this->input->post('id_kategori'),
                'id_user'           => $this->session->userdata('id_user'),
                'catatan'           => $this->input->post('catatan'),
            );

            if ($_FILES['file_pendukung']['error'] != 4) {
                $config['upload_path'] = $this->imagePath;
                $config['allowed_types'] = 'pdf|doc|docx';
                $config['max_size'] = '5120';
                $this->load->library('upload', $config);

                if ($this->upload->do_upload("file_pendukung")) {
                    $image = $this->upload->data();
                    $params['filename'] = $image['file_name'];
                    $params['image'] = $this->imagePath . $image['file_name'];
                } else {
                    $error = array('error' => $this->upload->display_errors());
                    $data['error_upload'] = '<div class="alert alert-danger alert-dismissable">
                                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>' . $error['error'] . '</div>';
                    $this->session->set_flashdata('message', '<div class="alert alert-danger">
                                    <button class="close" data-dismiss="alert"> × </button>
                                    <i class="fa fa-check-circle"></i>
                                    <strong> Bimbingan gagal dikirim!!! </strong>
                                    </div>');
                    redirect('bimbingan/kkl/bimbingan_kelompok/' . urlencode(base64_encode($id_kelompok_kkl)));
                    return false;
                }
            }
            $this->kklmodels->insert_kelompok($params);
            $this->session->set_flashdata('message', '<div class="alert alert-success">
                                            <button class="close" data-dismiss="alert"> × </button>
                                            <i class="fa fa-check-circle"></i>
                                            <strong> Bimbingan Berhasil dikirim </strong>
                                        </div>');
            redirect('bimbingan/kkl/bimbingan_kelompok/' . urlencode(base64_encode($id_kelompok_kkl)));
        }
    }

    // function insert komentar
    function insert_komentar()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('komentar', 'Komentar', 'trim|required', array('required' => '%s Harus Diisi.'));
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissable">
                                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>', '</div>');

        $id_kelompok_kkl = $this->input->post('id_kelompok_kkl');
        if ($this->form_validation->run() == FALSE) {
            redirect('bimbingan/kkl/bimbingan_kelompok/' . urlencode(base64_encode($id_kelompok_kkl)));
            $this->session->set_flashdata('message', '<div class="alert alert-danger">
            <button class="close" data-dismiss="alert"> × </button>
            <i class="fa fa-check-circle"></i>
            <strong> Komentar gagal dikirim!!! </strong>
        </div>');
        } else {
            $params = array(
                'id_bimbingan_kkl_kelompok'   => $this->input->post('id_bimbingan_kkl_kelompok'),
                'komentar'           => $this->input->post('komentar'),
                'id_user'           => $this->session->userdata('id_user'),
            );

            $this->kklmodels->insert_komentar($params);
            $this->session->set_flashdata('message', '<div class="alert alert-success">
                                            <button class="close" data-dismiss="alert"> × </button>
                                            <i class="fa fa-check-circle"></i>
                                            <strong> Komentar Berhasil dikirim </strong>
                                        </div>');
            redirect('bimbingan/kkl/bimbingan_kelompok/' . urlencode(base64_encode($id_kelompok_kkl)));
        }
    }

    // function cetak pdf bimbingan
    function cetak_pdf_bimbingan_kelompok()
    {
        // $this->ion_auth->is_allow('bimbingan/kkl/' . __FUNCTION__);
        $this->load->library('pdf');
        $this->load->helper('tanggal');
        $data['id_kelompok_kkl'] = base64_decode(urldecode($this->uri->segment(4)));
        $data['kelompok'] = $this->kklmodels->findbyidkelompok($data['id_kelompok_kkl']);
        $data['bimbingan'] = $this->kklmodels->bimbingan_kelompok($data['id_kelompok_kkl']);
        $data['daftar'] = $this->kklmodels->daftar_peserta($data['id_kelompok_kkl']);
        $html = $this->load->view('kkl/kelompok/cetak_pdf', $data, true);
        $this->pdf->createPDF($html, 'Dokumen_bimbingan', false);
    }

    // cetak sk kkl
    function cetak_sk_kelompok()
    {
        // $this->ion_auth->is_allow('bimbingan/kkl/' . __FUNCTION__);
        $this->load->library('pdf');
        $tahun = base64_decode(urldecode($this->uri->segment(4)));
        $semester = base64_decode(urldecode($this->uri->segment(5)));
        $data['bimbingan'] = $this->kklmodels->cetak_sk_kelompok($tahun, $semester);
        $html = $this->load->view('kkl/kelompok/cetak_sk', $data, true);
        $this->pdf->createPDF($html, 'Surat_kontrak', false);
    }

    // cetak sk kkl berdasarkan id kelompok mhs
    function cetak_sk_kelompok_by_id()
    {
        // $this->ion_auth->is_allow('bimbingan/kkl/' . __FUNCTION__);
        $this->load->library('pdf');
        $id_kelompok_kkl = base64_decode(urldecode($this->uri->segment(4)));
        $data['bimbingan'] = $this->kklmodels->cetak_sk_kelompok_per_id($id_kelompok_kkl);
        $html = $this->load->view('kkl/kelompok/cetak_sk_per_kelompok', $data, true);
        $this->pdf->createPDF($html, 'Surat_kontrak', false);
    }

    // download file bimbingan kelompok
    function download_file_bimbingan_kelompok()
    {
        // $this->ion_auth->is_allow('bimbingan/kkl/' . __FUNCTION__);
        $this->load->helper('download');
        $id = $this->uri->segment(4, FALSE);
        $file = $this->kklmodels->getFileInfo_kelompok($id);
        $full_path = $file['full_path'];
        $name = $file['name'];
        $data = file_get_contents($full_path);
        force_download($name, $data);
    }

    // accc kelompok
    function acc_kelompok()
    {
        // $this->ion_auth->is_allow('bimbingan/kkl/' . __FUNCTION__);
        $id_kelompok_kkl = $this->input->post('id_kelompok_kkl');
        $this->db->query("update kelompok_kkl set approv_dosen = 't', time_approv_dosen = now() where id = '$id_kelompok_kkl'");
        redirect('bimbingan/kkl/bimbingan_kelompok/' . urlencode(base64_encode($id_kelompok_kkl)));
    }
}
