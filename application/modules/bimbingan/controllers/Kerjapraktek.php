<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Kerjapraktek extends MX_Controller
{
    var $imagePath = 'files/kerjapraktek/';
    function __construct()
    {
        parent::__construct();
        $this->load->model(array('kerjapraktekmodels', 'akademikmodels'));
        $this->template->set('title', '<i class="fa text-success">Bimbingan Kerja Praktek </i>');
        // $this->output->enable_profiler(TRUE);
    }

    function index()
    {
        $this->ion_auth->is_allow('bimbingan/kerjapraktek');
        $role = $this->session->userdata('group_id');
        if ($role == '1' || $role == '2') {
            $data['bimbingan'] = $this->kerjapraktekmodels->get_all();
            $this->template->load('layout', 'kp/views', $data);
        } elseif ($role == '4') {
            $data['bimbingan'] = $this->kerjapraktekmodels->get_dosen();
            $this->template->load('layout', 'kp/views_dosen', $data);
        } elseif ($role == '5') {
            $data['bimbingan'] = $this->kerjapraktekmodels->get_mhs();
            $this->template->load('layout', 'kp/views_mhs', $data);
        }
    }

    function bimbingan()
    {
        $this->ion_auth->is_allow('bimbingan/kerjapraktek/' . __FUNCTION__);
        $this->load->helper('tanggal');
        $data['id_kp'] = base64_decode(urldecode($this->uri->segment(4)));
        $data['approv'] = $this->kerjapraktekmodels->cek_approv($data['id_kp']);
        $data['sk'] = $this->kerjapraktekmodels->findbyidsk($data['id_kp']);
        $data['bimbingan'] = $this->kerjapraktekmodels->bimbingan($data['id_kp']);
        $data['detail_kp'] = $this->kerjapraktekmodels->detail($data['id_kp']);
        $data['count'] = $this->kerjapraktekmodels->count_bimbingan($data['id_kp']);
        $data['role'] = $this->session->userdata('group_id');
        $data['id_userdosen'] = $this->akademikmodels->cek_id_user($data['detail_kp']['npp_dosen']);
        $this->template->load('layout', 'kp/list_bimbingan', $data);
    }

    // membatalkan persetujuan bimbingan
    function unapprov()
    {
        $id_kp = base64_decode(urldecode($this->uri->segment(4)));
        $this->db->query("update kerja_praktek set approv_kaprodi = NULL where id = '$id_kp'");
        $this->session->set_flashdata('message', '<div class="alert alert-success">
                                            <button class="close" data-dismiss="alert"> × </button>
                                            <i class="fa fa-check-circle"></i>
                                            <strong> Skripsi Berhasil Dibatalkan </strong>
                                        </div>');
        redirect('bimbingan/kerjapraktek');
    }

    function insert()
    {
        $this->ion_auth->is_allow('bimbingan/kerjapraktek/' . __FUNCTION__);
        $this->load->library('form_validation');
        $this->form_validation->set_rules('catatan', 'Catatan', 'trim|required', array('required' => '%s Harus Diisi.'));
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissable">
                                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>', '</div>');

        $id_kp = $this->input->post('id_kp');
        if ($this->form_validation->run() == FALSE) {
            redirect('bimbingan/kerjapraktek/bimbingan/' . urlencode(base64_encode($id_kp)));
            $this->session->set_flashdata('message', '<div class="alert alert-danger">
            <button class="close" data-dismiss="alert"> × </button>
            <i class="fa fa-check-circle"></i>
            <strong> Bimbingan gagal dikirim!!! </strong>
        </div>');
        } else {
            $params = array(
                'id_kp'                   => $id_kp,
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
                    redirect('bimbingan/kerjapraktek/bimbingan');
                    $this->session->set_flashdata('message', '<div class="alert alert-danger">
                                <button class="close" data-dismiss="alert"> × </button>
                                <i class="fa fa-check-circle"></i>
                                <strong> Pengajuan gagal dikirim!!! </strong>
                            </div>');
                    return false;
                }
            }
            $id = $this->kerjapraktekmodels->insert($params);
            $this->session->set_flashdata('message', '<div class="alert alert-success">
                                            <button class="close" data-dismiss="alert"> × </button>
                                            <i class="fa fa-check-circle"></i>
                                            <strong> Bimbingan Berhasil dikirim </strong>
                                        </div>');
            redirect('bimbingan/kerjapraktek/bimbingan/' . urlencode(base64_encode($id_kp)));
        }
    }

    function insert_dosenmhs()
    {
        // $this->ion_auth->is_allow('bimbingan/kerjapraktek/' . __FUNCTION__);
        $this->load->library('form_validation');
        $this->form_validation->set_rules('catatan', 'Catatan', 'trim|required', array('required' => '%s Harus Diisi.'));
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissable">
                                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>', '</div>');

        $id_kp = $this->input->post('id_kp');
        if ($this->form_validation->run() == FALSE) {
            redirect('bimbingan/kerjapraktek/bimbingan/' . urlencode(base64_encode($id_kp)));
            $this->session->set_flashdata('message', '<div class="alert alert-danger">
            <button class="close" data-dismiss="alert"> × </button>
            <i class="fa fa-check-circle"></i>
            <strong> Bimbingan gagal dikirim!!! </strong>
        </div>');
        } else {
            $params = array(
                'id_kp'                   => $id_kp,
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
                    redirect('bimbingan/kerjapraktek/bimbingan');
                    $this->session->set_flashdata('message', '<div class="alert alert-danger">
                                <button class="close" data-dismiss="alert"> × </button>
                                <i class="fa fa-check-circle"></i>
                                <strong> Pengajuan gagal dikirim!!! </strong>
                            </div>');
                    return false;
                }
            }
            $id = $this->kerjapraktekmodels->insert($params);
            $this->session->set_flashdata('message', '<div class="alert alert-success">
                                            <button class="close" data-dismiss="alert"> × </button>
                                            <i class="fa fa-check-circle"></i>
                                            <strong> Bimbingan Berhasil dikirim </strong>
                                        </div>');
            redirect('bimbingan/kerjapraktek/bimbingan/' . urlencode(base64_encode($id_kp)));
        }
    }

    //update bimbingan
    function update_bimbingan()
    {
        // $this->ion_auth->is_allow('bimbingan/kerjapraktek/' . __FUNCTION__);
        $this->load->library('form_validation');
        $this->form_validation->set_rules('catatan', 'Catatan', 'trim|required', array('required' => '%s Harus Diisi.'));
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissable">
                                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>', '</div>');

        $id_kp = $this->input->post('id_kp');
        $id_bimbingan = $this->input->post('id_bimbingan');
        if ($this->form_validation->run() == FALSE) {
            redirect('bimbingan/kerjapraktek/bimbingan/' . urlencode(base64_encode($id_kp)));
            $this->session->set_flashdata('message', '<div class="alert alert-danger">
            <button class="close" data-dismiss="alert"> × </button>
            <i class="fa fa-check-circle"></i>
            <strong> Bimbingan gagal dikirim!!! </strong>
        </div>');
        } else {
            $params = array(
                'id_kp'                   => $id_kp,
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
                    redirect('bimbingan/kerjapraktek/bimbingan');
                    $this->session->set_flashdata('message', '<div class="alert alert-danger">
                                <button class="close" data-dismiss="alert"> × </button>
                                <i class="fa fa-check-circle"></i>
                                <strong> Pengajuan gagal dikirim!!! </strong>
                            </div>');
                    return false;
                }
            }
            $this->kerjapraktekmodels->update($id_bimbingan, $params);
            $this->session->set_flashdata('message', '<div class="alert alert-success">
                                            <button class="close" data-dismiss="alert"> × </button>
                                            <i class="fa fa-check-circle"></i>
                                            <strong> Bimbingan Berhasil diubah </strong>
                                        </div>');
            redirect('bimbingan/kerjapraktek/bimbingan/' . urlencode(base64_encode($id_kp)));
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
        $this->kerjapraktekmodels->delete($id_bimbingan);
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
        $this->ion_auth->is_allow('bimbingan/kerjapraktek/' . __FUNCTION__);
        $id_kp = $this->input->post('id');
        $data['kp'] = $this->kerjapraktekmodels->detail($id_kp);
        $this->load->view('kp/detail', $data);
    }

    // download file
    function download()
    {
        $this->ion_auth->is_allow('bimbingan/kerjapraktek/' . __FUNCTION__);
        $this->load->helper('download');
        $id = $this->uri->segment(4, FALSE);
        $file = $this->kerjapraktekmodels->getFileInfo($id);
        $full_path = $file['full_path'];
        $name = $file['name'];
        $data = file_get_contents($full_path);
        force_download($name, $data);
    }

    // cetak sk per mhs
    function cetak_sk_mhs()
    {
        $this->ion_auth->is_allow('bimbingan/kerjapraktek/' . __FUNCTION__);
        $this->load->library('pdf');
        $this->load->helper('tanggal');
        $id_kp = base64_decode(urldecode($this->uri->segment(4)));
        $data['kp'] = $this->kerjapraktekmodels->cetak_pdf($id_kp);
        $html = $this->load->view('kp/cetak_sk_mhs', $data, true);
        $this->pdf->createPDF($html, 'Surat_kontrak', false);
    }

    // bimbingan lanjut
    function lanjut()
    {
        $this->ion_auth->is_allow('bimbingan/kerjapraktek/' . __FUNCTION__);
        $id_kp = $this->input->post('id_kp');
        $this->db->query("update kerja_praktek set approv_kaprodi = null, status_pendaftar = '2' where id = '$id_kp'");
        $this->session->set_flashdata('message', '<div class="alert alert-success">
                                            <button class="close" data-dismiss="alert"> × </button>
                                            <i class="fa fa-check-circle"></i>
                                            <strong> Pengajuan Lanjut Bimbingan Berhasil dikirim </strong>
                                        </div>');
        redirect('daftar/kerjapraktek');
    }

    function acc()
    {
        $this->ion_auth->is_allow('bimbingan/kerjapraktek/' . __FUNCTION__);
        $id_kp = $this->input->post('id_kp');
        $this->db->query("update kerja_praktek set approv_dosen = 't', time_approv_dosen = now() where id = '$id_kp'");
        redirect('bimbingan/kerjapraktek/bimbingan/' . urlencode(base64_encode($id_kp)));
    }

    function cetak_pdf()
    {
        $this->ion_auth->is_allow('bimbingan/kerjapraktek/' . __FUNCTION__);
        $this->load->library('pdf');
        $this->load->helper('tanggal');
        $id_kp = base64_decode(urldecode($this->uri->segment(4)));
        $data['kp'] = $this->kerjapraktekmodels->cetak_pdf($id_kp);
        $data['bimbingan'] = $this->kerjapraktekmodels->cetak_bimbingan($id_kp);
        $html = $this->load->view('kp/cetak_pdf', $data, true);
        $this->pdf->createPDF($html, 'Dokumen_bimbingan', false);
    }

    function search()
    {
        $this->ion_auth->is_allow('bimbingan/kerjapraktek/' . __FUNCTION__);
        $data['tahun'] = $this->input->post('tahun');
        $data['semester'] = $this->input->post('semester');
        $data['bimbingan'] = $this->kerjapraktekmodels->get_all($data['tahun'], $data['semester']);
        $this->load->view('kp/result', $data);
    }

    function search_dosen()
    {
        // $this->ion_auth->is_allow('bimbingan/kerjapraktek/' . __FUNCTION__);
        $data['tahun'] = $this->input->post('tahun');
        $data['semester'] = $this->input->post('semester');
        $data['bimbingan'] = $this->kerjapraktekmodels->get_dosen($data['tahun'], $data['semester']);
        $this->load->view('kp/result_dosen', $data);
    }

    function cetak_sk()
    {
        $this->ion_auth->is_allow('bimbingan/kerjapraktek/' . __FUNCTION__);
        $this->load->library('pdf');
        $this->load->helper('tanggal');
        $tahun = base64_decode(urldecode($this->uri->segment(4)));;
        $semester = base64_decode(urldecode($this->uri->segment(5)));;
        $data['bimbingan'] = $this->kerjapraktekmodels->get_all($tahun, $semester);
        $html = $this->load->view('kp/cetak_sk', $data, true);
        $this->pdf->createPDF($html, 'Surat_Kontrak', false);
    }

    // menampilkan dialog dosen pada bimbingan mhs
    function set_dialog()
    {
        $id = $this->input->post('id');
        $confirm = $this->input->post('confirm');
        $detail_kp = $this->kerjapraktekmodels->detail($id);
        if ($detail_kp['flag_open'] == $confirm) {
            $this->db->query("update kerja_praktek set flag_open = '$confirm' where id = '$id'");
        } else {
            $this->db->query("update kerja_praktek set flag_open = '$confirm' where id = '$id'");
        }
        redirect('bimbingan/kerjapraktek/bimbingan/' . urlencode(base64_encode($id)));
    }
}
