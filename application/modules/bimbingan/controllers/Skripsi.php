<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Skripsi extends MX_Controller
{
    var $imagePath = 'files/skripsi/';
    function __construct()
    {
        parent::__construct();
        $this->load->model(array('skripsimodels', 'akademikmodels'));
        $this->template->set('title', '<i class="fa text-success">Bimbingan Skripsi </i>');
        // $this->output->enable_profiler(TRUE);
    }

    function index()
    {
        $this->ion_auth->is_allow('bimbingan/skripsi');
        $role = $this->session->userdata('group_id');
        if ($role == '1' || $role == '2') {
            $data['bimbingan'] = $this->skripsimodels->get_all();
            $this->template->load('layout', 'skripsi/views', $data);
        } elseif ($role == '4') {
            $data['bimbingan'] = $this->skripsimodels->get_dosen();
            $this->template->load('layout', 'skripsi/views_dosen', $data);
        } elseif ($role == '5') {
            $data['bimbingan'] = $this->skripsimodels->get_mhs();
            $this->template->load('layout', 'skripsi/views_mhs', $data);
        }
    }

    // membatalkan persetujuan bimbingan
    function unapprov()
    {
        $id_skripsi = base64_decode(urldecode($this->uri->segment(4)));
        $this->db->query("update skripsi set approv_kaprodi = NULL where id = '$id_skripsi'");
        $this->session->set_flashdata('message', '<div class="alert alert-success">
                                            <button class="close" data-dismiss="alert"> × </button>
                                            <i class="fa fa-check-circle"></i>
                                            <strong> Skripsi Berhasil Dibatalkan </strong>
                                        </div>');
        redirect('bimbingan/skripsi');
    }

    function bimbingan()
    {
        $this->ion_auth->is_allow('bimbingan/skripsi/' . __FUNCTION__);
        $this->load->helper('tanggal');
        $data['id_skripsi'] = base64_decode(urldecode($this->uri->segment(4)));
        $data['approv'] = $this->skripsimodels->cek_approv($data['id_skripsi']);
        $data['sk'] = $this->skripsimodels->findbyidsk($data['id_skripsi']);
        $data['bimbingan'] = $this->skripsimodels->bimbingan($data['id_skripsi']);
        $data['count'] = $this->skripsimodels->count_bimbingan($data['id_skripsi']);
        $data['detail'] = $this->skripsimodels->detail($data['id_skripsi']);
        $data['id_userdosen'] = $this->akademikmodels->cek_id_user($data['detail']['npp_dosen']);
        $data['role'] = $this->session->userdata('group_id');
        $this->template->load('layout', 'skripsi/list_bimbingan', $data);
    }

    function insert()
    {
        $this->ion_auth->is_allow('bimbingan/skripsi/' . __FUNCTION__);
        $this->load->library('form_validation');
        $this->form_validation->set_rules('catatan', 'Catatan', 'trim|required', array('required' => '%s Harus Diisi.'));
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissable">
                                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>', '</div>');

        $id_skripsi = $this->input->post('id_skripsi');
        if ($this->form_validation->run() == FALSE) {
            redirect('bimbingan/skripsi/bimbingan/' . urlencode(base64_encode($id_skripsi)));
            $this->session->set_flashdata('message', '<div class="alert alert-danger">
            <button class="close" data-dismiss="alert"> × </button>
            <i class="fa fa-check-circle"></i>
            <strong> Bimbingan gagal dikirim!!! </strong>
        </div>');
        } else {
            $params = array(
                'id_skripsi'              => $id_skripsi,
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
                    $data['profile'] = $this->akademikmodels->biodata($nim);
                    $data['akademik'] = $this->akademikmodels->data_studi($nim);
                    $data['krs'] = $this->akademikmodels->cek_krs_kp($nim);
                    $data['dosen'] = $this->akademikmodels->dosen();
                    $error = array('error' => $this->upload->display_errors());
                    $data['error_upload'] = '<div class="alert alert-danger alert-dismissable">
                                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>' . $error['error'] . '</div>';
                    redirect('bimbingan/skripsi/bimbingan');
                    $this->session->set_flashdata('message', '<div class="alert alert-danger">
                                <button class="close" data-dismiss="alert"> × </button>
                                <i class="fa fa-check-circle"></i>
                                <strong> Pengajuan gagal dikirim!!! </strong>
                            </div>');
                    return false;
                }
            }
            $id = $this->skripsimodels->insert($params);
            $this->session->set_flashdata('message', '<div class="alert alert-success">
                                            <button class="close" data-dismiss="alert"> × </button>
                                            <i class="fa fa-check-circle"></i>
                                            <strong> Bimbingan Berhasil dikirim </strong>
                                        </div>');
            redirect('bimbingan/skripsi/bimbingan/' . urlencode(base64_encode($id_skripsi)));
        }
    }

    function insert_dosenmhs()
    {
        // $this->ion_auth->is_allow('bimbingan/skripsi/' . __FUNCTION__);
        $this->load->library('form_validation');
        $this->form_validation->set_rules('catatan', 'Catatan', 'trim|required', array('required' => '%s Harus Diisi.'));
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissable">
                                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>', '</div>');

        $id_skripsi = $this->input->post('id_skripsi');
        if ($this->form_validation->run() == FALSE) {
            redirect('bimbingan/skripsi/bimbingan/' . urlencode(base64_encode($id_skripsi)));
            $this->session->set_flashdata('message', '<div class="alert alert-danger">
            <button class="close" data-dismiss="alert"> × </button>
            <i class="fa fa-check-circle"></i>
            <strong> Bimbingan gagal dikirim!!! </strong>
        </div>');
        } else {
            $params = array(
                'id_skripsi'              => $id_skripsi,
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
                    $data['profile'] = $this->akademikmodels->biodata($nim);
                    $data['akademik'] = $this->akademikmodels->data_studi($nim);
                    $data['krs'] = $this->akademikmodels->cek_krs_kp($nim);
                    $data['dosen'] = $this->akademikmodels->dosen();
                    $error = array('error' => $this->upload->display_errors());
                    $data['error_upload'] = '<div class="alert alert-danger alert-dismissable">
                                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>' . $error['error'] . '</div>';
                    redirect('bimbingan/skripsi/bimbingan');
                    $this->session->set_flashdata('message', '<div class="alert alert-danger">
                                <button class="close" data-dismiss="alert"> × </button>
                                <i class="fa fa-check-circle"></i>
                                <strong> Pengajuan gagal dikirim!!! </strong>
                            </div>');
                    return false;
                }
            }
            $id = $this->skripsimodels->insert($params);
            $this->session->set_flashdata('message', '<div class="alert alert-success">
                                            <button class="close" data-dismiss="alert"> × </button>
                                            <i class="fa fa-check-circle"></i>
                                            <strong> Bimbingan Berhasil dikirim </strong>
                                        </div>');
            redirect('bimbingan/skripsi/bimbingan/' . urlencode(base64_encode($id_skripsi)));
        }
    }

    function update_bimbingan()
    {
        // $this->ion_auth->is_allow('bimbingan/skripsi/' . __FUNCTION__);
        $this->load->library('form_validation');
        $this->form_validation->set_rules('catatan', 'Catatan', 'trim|required', array('required' => '%s Harus Diisi.'));
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissable">
                                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>', '</div>');

        $id_skripsi = $this->input->post('id_skripsi');
        $id_bimbingan = $this->input->post('id_bimbingan');
        if ($this->form_validation->run() == FALSE) {
            redirect('bimbingan/skripsi/bimbingan/' . urlencode(base64_encode($id_skripsi)));
            $this->session->set_flashdata('message', '<div class="alert alert-danger">
            <button class="close" data-dismiss="alert"> × </button>
            <i class="fa fa-check-circle"></i>
            <strong> Bimbingan gagal dikirim!!! </strong>
        </div>');
        } else {
            $params = array(
                'id_skripsi'              => $id_skripsi,
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
                    $data['profile'] = $this->akademikmodels->biodata($nim);
                    $data['akademik'] = $this->akademikmodels->data_studi($nim);
                    $data['krs'] = $this->akademikmodels->cek_krs_kp($nim);
                    $data['dosen'] = $this->akademikmodels->dosen();
                    $error = array('error' => $this->upload->display_errors());
                    $data['error_upload'] = '<div class="alert alert-danger alert-dismissable">
                                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>' . $error['error'] . '</div>';
                    redirect('bimbingan/skripsi/bimbingan');
                    $this->session->set_flashdata('message', '<div class="alert alert-danger">
                                <button class="close" data-dismiss="alert"> × </button>
                                <i class="fa fa-check-circle"></i>
                                <strong> Pengajuan gagal dikirim!!! </strong>
                            </div>');
                    return false;
                }
            }
            $this->skripsimodels->update($id_bimbingan, $params);
            $this->session->set_flashdata('message', '<div class="alert alert-success">
                                            <button class="close" data-dismiss="alert"> × </button>
                                            <i class="fa fa-check-circle"></i>
                                            <strong> Bimbingan Berhasil dikirim </strong>
                                        </div>');
            redirect('bimbingan/skripsi/bimbingan/' . urlencode(base64_encode($id_skripsi)));
        }
    }

    /*
     * menghapus data catatan bimbingan
     */
    function delete()
    {
        // $this->ion_auth->is_allow('users/' . __FUNCTION__);
        $id = $this->input->post('id');
        list($id_kp, $id_bimbingan) = explode(":", $id);
        $this->skripsimodels->delete($id_bimbingan);
        $this->session->set_flashdata('message', '<div class="alert alert-success">
                                            <button class="close" data-dismiss="alert"> × </button>
                                            <i class="fa fa-check-circle"></i>
                                            <strong> Bimbingan Berhasil dihapus </strong>
                                        </div>');

        redirect('bimbingan/kerjapraktek/bimbingan/' . urlencode(base64_encode($id_kp)));
    }

    // detail bimbingan kp
    function detail()
    {
        $this->ion_auth->is_allow('bimbingan/skripsi/' . __FUNCTION__);
        $id_skripsi = $this->input->post('id');
        $data['skripsi'] = $this->skripsimodels->detail($id_skripsi);
        $this->load->view('skripsi/detail', $data);
    }

    // download file
    function download()
    {
        $this->ion_auth->is_allow('bimbingan/skripsi/' . __FUNCTION__);
        $this->load->helper('download');
        $id = $this->uri->segment(4, FALSE);
        $file = $this->skripsimodels->getFileInfo($id);
        $full_path = $file['full_path'];
        $name = $file['name'];
        $data = file_get_contents($full_path);
        force_download($name, $data);
    }

    // cetak sk per mhs
    function cetak_sk_mhs()
    {
        $this->ion_auth->is_allow('bimbingan/skripsi/' . __FUNCTION__);
        $this->load->library('pdf');
        $this->load->helper('tanggal');
        $id_skripsi = base64_decode(urldecode($this->uri->segment(4)));
        $data['skripsi'] = $this->skripsimodels->cetak_pdf($id_skripsi);
        $html = $this->load->view('skripsi/cetak_sk_mhs', $data, true);
        $this->pdf->createPDF($html, 'Surat_kontrak', false);
    }

    // bimbingan lanjut
    function lanjut()
    {
        $this->ion_auth->is_allow('bimbingan/skripsi/' . __FUNCTION__);
        $id_skripsi = $this->input->post('id_skripsi');
        $this->db->query("update skripsi set approv_kaprodi = null, status_pendaftar = '2' where id = '$id_skripsi'");
        $this->session->set_flashdata('message', '<div class="alert alert-success">
                                            <button class="close" data-dismiss="alert"> × </button>
                                            <i class="fa fa-check-circle"></i>
                                            <strong> Pengajuan Lanjut Bimbingan Berhasil dikirim </strong>
                                        </div>');
        redirect('daftar/skripsi');
    }

    function acc()
    {
        $this->ion_auth->is_allow('bimbingan/skripsi/' . __FUNCTION__);
        $id_skripsi = $this->input->post('id_skripsi');
        $this->db->query("update skripsi set approv_dosen = 't', time_approv_dosen = now() where id = '$id_skripsi'");
        redirect('bimbingan/skripsi/bimbingan/' . urlencode(base64_encode($id_skripsi)));
    }

    function cetak_pdf()
    {
        $this->ion_auth->is_allow('bimbingan/skripsi/' . __FUNCTION__);
        $this->load->library('pdf');
        $this->load->helper('tanggal');
        $id_skripsi = base64_decode(urldecode($this->uri->segment(4)));
        $data['skripsi'] = $this->skripsimodels->cetak_pdf($id_skripsi);
        $data['bimbingan'] = $this->skripsimodels->cetak_bimbingan($id_skripsi);
        $html = $this->load->view('skripsi/cetak_pdf', $data, true);
        $this->pdf->createPDF($html, 'Dokumen_bimbingan', false);
    }

    function search()
    {
        $this->ion_auth->is_allow('bimbingan/skripsi/' . __FUNCTION__);
        $data['tahun'] = $this->input->post('tahun');
        $data['semester'] = $this->input->post('semester');
        $data['bimbingan'] = $this->skripsimodels->get_all($data['tahun'], $data['semester']);
        $this->load->view('skripsi/result', $data);
    }

    function search_dosen()
    {
        // $this->ion_auth->is_allow('bimbingan/skripsi/' . __FUNCTION__);
        $data['tahun'] = $this->input->post('tahun');
        $data['semester'] = $this->input->post('semester');
        $data['bimbingan'] = $this->skripsimodels->get_dosen($data['tahun'], $data['semester']);
        $this->load->view('skripsi/result_dosen', $data);
    }

    function cetak_sk()
    {
        $this->ion_auth->is_allow('bimbingan/skripsi/' . __FUNCTION__);
        $this->load->library('pdf');
        $this->load->helper('tanggal');
        $tahun = base64_decode(urldecode($this->uri->segment(4)));;
        $semester = base64_decode(urldecode($this->uri->segment(5)));;
        $data['bimbingan'] = $this->skripsimodels->get_all($tahun, $semester);
        $html = $this->load->view('skripsi/cetak_sk', $data, true);
        $this->pdf->createPDF($html, 'Surat_Kontrak', false);
    }

    // menampilkan dialog dosen pada bimbingan mhs
    function set_dialog()
    {
        $id = $this->input->post('id');
        $confirm = $this->input->post('confirm');
        $detail_kp = $this->skripsimodels->detail($id);
        if ($detail_kp['flag_open'] == $confirm) {
            $this->db->query("update skripsi set flag_open = '$confirm' where id = '$id'");
        } else {
            $this->db->query("update skripsi set flag_open = '$confirm' where id = '$id'");
        }
        redirect('bimbingan/skripsi/bimbingan/' . urlencode(base64_encode($id)));
    }
}
