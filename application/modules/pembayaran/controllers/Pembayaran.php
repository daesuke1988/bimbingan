<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class pembayaran extends MX_Controller
{
    public $data;
    function __construct()
    {
        parent::__construct();
        $this->load->model(array('pembayaran_models', 'akademikmodels', 'users/usermodels'));
        $this->template->set('title', '<i class="fa text-success"> Data Pembayaran </i>');
    }

    function index()
    {
        // $this->ion_auth->is_allow('pembayaran');
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
            // $data['mhs'] = $this->akademikmodels->mhs();
            $url = 'https://apisiakad.stmikelrahma.ac.id/api/getmahasiswa';

            /* Init cURL resource */
            $ch = curl_init($url);

            /* Array Parameter Data */
            $data = ['kdpst' => '55201'];

            $data_string = json_encode($data);
            /* pass encoded JSON string to the POST fields */
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);

            /* set the content type json */
            $headers = [];
            $headers[] = 'Content-Type:application/json';
            $token = '$2y$10$xYWGjTbiVTLhjE/IMMh8X.2YEUWqncB1k9jZJ.cJ99skWmtChul1y';
            $headers[] = "Authorization: Bearer " . $token;
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

            /* set return type json */
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            /* execute request */
            $result = curl_exec($ch);

            /* close cURL resource */
            curl_close($ch);
            $decode = json_decode($result, true);
            $data['mhs'] = $decode['data'];
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
                $cek = $this->pembayaran_models->cek_approv($nim, $jenis);
                if ($cek['approv_dosen'] == 't') {
                    $this->session->set_flashdata('message_pembayaran', '<div class="alert alert-warning alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button> NIM <strong>' . $nim . '</strong> sudah menyelesaikan ' . $jenis . '</div>');
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
                    if ($this->usermodels->isUsernameExists($nim)) {
                        $this->template->load('layout', 'users/data_sama');
                    } else {
                        $data = array(
                            'username'              => $nim,
                            'nama_lengkap'          => $nama,
                            'password'                => sha1($this->input->post('password')),
                            'is_active'             => $this->input->post('is_active')
                        );

                        $id = $this->usermodels->insert($data);
                        $group = array(
                            'user_id' => $id,
                            'group_id' => '5',
                        );
                        $this->usermodels->insert_group($group);
                    }
                    $this->session->set_flashdata('message_pembayaran', '<div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button> Data Berhasil Disimpan. </div>');
                }
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

    function search()
    {
        // $this->ion_auth->is_allow('bimbingan/kerjapraktek/' . __FUNCTION__);
        $data['jenis_pembayaran'] = $this->input->post('jenis_pembayaran');
        $data['approv_dosen'] = $this->input->post('approv_dosen');
        $data['pembayaran'] = $this->pembayaran_models->get_all_pembayaran($data['jenis_pembayaran'],  $data['approv_dosen']);
        $this->load->view('result', $data);
    }

    function ambil_api()
    {
        $url = 'https://apisiakad.stmikelrahma.ac.id/api/getmahasiswa';

        /* Init cURL resource */
        $ch = curl_init($url);

        /* Array Parameter Data */
        $data = ['kdpst' => '55201'];

        $data_string = json_encode($data);
        /* pass encoded JSON string to the POST fields */
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);

        /* set the content type json */
        $headers = [];
        $headers[] = 'Content-Type:application/json';
        $token = '$2y$10$xYWGjTbiVTLhjE/IMMh8X.2YEUWqncB1k9jZJ.cJ99skWmtChul1y';
        $headers[] = "Authorization: Bearer " . $token;
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        /* set return type json */
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        /* execute request */
        $result = curl_exec($ch);

        /* close cURL resource */
        curl_close($ch);
        $decode = json_decode($result, true);
        // echo '<pre>';
        // echo var_dump($decode['data'][0]['nim']);
        // echo '</pre>';
        foreach ($decode['data'] as $key => $row) {
            echo $row['nim'] . ' - ' . $row['namamhs'] . br(1);
        }
    }
}
