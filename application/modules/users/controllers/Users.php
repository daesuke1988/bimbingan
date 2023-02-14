<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Users extends MX_Controller
{
    var $imagePath = 'upload/profile';
    function __construct()
    {
        parent::__construct();
        $this->load->model(array('usermodels', 'groups/groups_models'));
        $this->load->library(array('form_validation'));
        $this->template->set('title', '<i class="fa text-success"> Data Pengguna </i>');
        // $this->output->enable_profiler(TRUE);
    }

    public function index()
    {
        $this->ion_auth->is_allow('users');
        $data['all_user'] = $this->usermodels->get_all_user();
        $this->template->load('layout', 'users_view', $data);
    }

    /*
     * function untuk menambahkan data users
     */
    function insert()
    {
        $this->ion_auth->is_allow('users/' . __FUNCTION__);
        $this->form_validation->set_rules('username', 'username', 'trim|required', array('required' => '%s Harus Diisi.'));
        $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'trim|required', array('required' => '%s Harus Diisi.'));
        $this->form_validation->set_rules('password', 'Password', 'trim|required', array('required' => '%s Harus Diisi.'));
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>', '</div>');

        if ($this->form_validation->run() == FALSE) {
            $data['groups'] = $this->groups_models->get_all_groups();
            $this->template->load('layout', 'insert_user', $data);
            $this->session->set_flashdata('message', '<h4 class="alert_warning">data gagal ditambahkan</h4>');
        } else {
            $username = $this->input->post('username');
            if ($this->usermodels->isUsernameExists($username)) {
                $this->template->load('layout', 'users/data_sama');
            } else {
                $data = array(
                    'username'              => $this->input->post('username'),
                    'nama_lengkap'          => $this->input->post('nama_lengkap'),
                    'password'                => sha1($this->input->post('password')),
                    'is_active'             => $this->input->post('is_active')
                );

                $id = $this->usermodels->insert($data);
                $group = array(
                    'user_id' => $id,
                    'group_id' => $this->input->post('id_role'),
                );
                $this->usermodels->insert_group($group);
                $this->session->set_flashdata('message', '<div class="alert alert-success">
                                            <button class="close" data-dismiss="alert"> × </button>
                                            <i class="fa fa-check-circle"></i>
                                            <strong> Data User Berhasil tambahkan </strong>
                                        </div>');
            }
            redirect('users');
        }
    }

    /*
     * simpan perubahan user
     */
    function update()
    {
        // $this->ion_auth->is_allow('users/' . __FUNCTION__);
        $this->form_validation->set_rules('username', 'Username', 'trim|required', array('required' => '%s Harus Diisi.'));
        $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'trim|required', array('required' => '%s Harus Diisi.'));
        $this->form_validation->set_rules('id_role', 'Groups', 'trim|required');
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>', '</div>');

        $id = base64_decode(urldecode($this->uri->segment(3)));
        if ($this->form_validation->run() == FALSE) {
            $data['title']    = ' Users';
            $data['groups'] = $this->groups_models->get_all_groups();
            $data['user'] = $this->usermodels->get_user_by_id($id);
            $this->template->load('layout', 'update_user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-danger">
                        <button class="close" data-dismiss="alert"> × </button>
                        <i class="fa fa-check-circle"></i>
                        <strong>User Gagal diubah</strong>
                    </div>');
        } else {
            $params = array(
                'username'             => $this->input->post('username'),
                'nama_lengkap'         => $this->input->post('nama_lengkap'),
                'is_active'            => $this->input->post('is_active')
            );
            $this->usermodels->update($id, $params);

            $group = array(
                'group_id'  => $this->input->post('id_role')
            );
            $this->usermodels->update_group($id, $group);

            $this->session->set_flashdata('message', '<div class="alert alert-success">
                                            <button class="close" data-dismiss="alert"> × </button>
                                            <i class="fa fa-check-circle"></i>
                                            <strong>User Berhasil diubah</strong>
                                        </div>');
            redirect('users');
        }
    }

    /*
     * cek, harus berupa angka
     */
    function valid_numeric($str)
    {
        return preg_match('/^[0-9,]+$/', $str);
    }

    /*
     * menghapus data user dan user dari group
     */
    function delete()
    {
        $this->ion_auth->is_allow('users/' . __FUNCTION__);
        $id = base64_decode(urldecode($this->uri->segment(3)));
        $user = $this->usermodels->get_user_by_id($id)->row();
        $cek_mhs = $this->db->query("select * from mhs where nim = '$user->username'")->row_array();
        $cek_dosen = $this->db->query("select * from dosen where nodos = '$user->username'")->row_array();
        if (is_null($cek_mhs) && is_null($cek_dosen)) {
            $this->usermodels->delete($id);
            $this->usermodels->delete_group($id);
            $this->session->set_flashdata('message', '<div class="alert alert-success">
                                            <button class="close" data-dismiss="alert"> × </button>
                                            <i class="fa fa-check-circle"></i>
                                            <strong> User Berhasil dihapus </strong>
                                        </div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger">
                                            <button class="close" data-dismiss="alert"> × </button>
                                            <i class="fa fa-check-circle"></i>
                                            <strong> Data Sudah terdaftar </strong>
                                        </div>');
        }
        redirect('users');
    }

    /*
     * melihat profile dan aktifitas user
     */
    function profile()
    {
        $this->form_validation->set_rules('fullname', 'Nama Lengkap', 'trim|required');
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>', '</div>');

        $id = $this->session->userdata('id_user');
        if ($this->form_validation->run() == FALSE) {
            $data['title']  = 'My Profile';
            $data['user']   = $this->usermodels->get_user_by_id($id);
            $this->template->load('layout', 'profile', $data);
        } else {
            $structure_npwp = $this->imagePath . '/' . $this->session->userdata('id_user') . '/';
            if (!is_dir($structure_npwp)) {
                mkdir($structure_npwp, 0777, true);
            }

            $data = array(
                'nama_lengkap'          => $this->input->post('fullname'),
                'email'                 => $this->input->post('email'),
                'passwd'                => sha1($this->input->post('password')),
            );
            if ($_FILES['image']['error'] != 4) {
                // //$config['encrypt_name'] = TRUE;
                $config['upload_path'] = $structure_npwp;
                $config['allowed_types'] = 'jpg|png|jpeg';
                $config['max_size'] = '20000';
                $this->load->library('upload', $config);

                if ($this->upload->do_upload("image")) {
                    $npwp = $this->upload->data();
                    $data['filename'] = $npwp['file_name'];
                    $data['image'] = $structure_npwp . $npwp['file_name'];
                } else {
                    $error = array('error' => $this->upload->display_errors());
                    $data['user']   = $this->usermodels->get_user_by_id($id);
                    $data['error_upload'] = $error['error'];
                    $data['title']  = 'My Profile';
                    $this->template->load('layout', 'profile', $data);
                    return false;
                }
            }
            $this->usermodels->update($id, $data);

            $this->session->set_flashdata('message', '<div class="alert alert-success">
                                            <button class="close" data-dismiss="alert"> × </button>
                                            <i class="fa fa-check-circle"></i>
                                            <strong>User Berhasil diubah</strong>
                                        </div>');
            redirect('users/profile');
        }
    }

    /*
     * function update password user
     */
    function update_password()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('password', 'Password', 'trim|required', array('required' => '%s Harus Diisi.'));

        $this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>', '</div>');

        // dapatkan id user dari segment ke-3 dari URI
        $id = base64_decode(urldecode($this->uri->segment(3)));

        if ($this->form_validation->run() == FALSE) {
            $data['users'] = $this->usermodels->get_user_by_id($id);
            $this->template->load('layout', 'update_password', $data);
        } else {
            $data = array(
                'password'      => sha1($this->input->post('password')),
            );

            $this->usermodels->update($id, $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success">
                                            <button class="close" data-dismiss="alert"> × </button>
                                            <i class="fa fa-check-circle"></i>
                                            <strong>Password Berhasil diubah</strong>
                                        </div>');
            redirect('users');
        }
    }

    /*
     * reset password
     */
    function reset_password()
    {
        // $this->ion_auth->is_allow('users/' . __FUNCTION__);
        $this->form_validation->set_rules('password', 'Password', 'trim|required', array('required' => '%s Harus Diisi.'));
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>', '</div>');

        $id = $this->session->userdata('id_user');
        if ($this->form_validation->run() == FALSE) {
            $data['title']    = ' Users';
            $data['users'] = $this->usermodels->get_user_by_id($id);
            $this->template->load('layout', 'reset_password', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-danger">
                        <button class="close" data-dismiss="alert"> × </button>
                        <i class="fa fa-check-circle"></i>
                        <strong>User Gagal diubah</strong>
                    </div>');
        } else {
            $params = array(
                'password'      => sha1($this->input->post('password')),
            );
            $this->usermodels->update($id, $params);

            $this->session->set_flashdata('message', '<div class="alert alert-success">
                                            <button class="close" data-dismiss="alert"> × </button>
                                            <i class="fa fa-check-circle"></i>
                                            <strong>User Berhasil diubah</strong>
                                        </div>');
            redirect('welcome/logout');
        }
    }
}

/* End of file users.php */
/* Location: ./application/modules/users/controllers/users.php */