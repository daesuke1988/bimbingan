<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: kresna
 * Date: 8/27/2015
 * Time: 10:08 AM
 */

class groups extends MX_Controller
{
    public $data;
    function __construct()
    {
        parent::__construct();
        $this->load->model(array('groups_models'));
        $this->template->set('title', '<i class="fa text-success"> Data Role Pengguna </i>');
    }

    function index()
    {
        // $this->ion_auth->is_allow('groups');
        $data['all_groups'] = $this->groups_models->get_all_groups();
        $this->template->load('layout', 'views', $data);
    }

    /*
     * function untuk menambahkan data group
     */
    function insert()
    {
        $this->ion_auth->is_allow('groups/' . __FUNCTION__);
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Nama Group', 'trim|required');
        $this->form_validation->set_rules('desc', 'Deskripsi Group', 'trim|required');
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>', '</div>');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('layout', 'insert');
            $this->session->set_flashdata('message_groups', '<div class="alert alert-danger alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button> Data gagal disimpan. </div>');
        } else {
            $data = array(
                'name'      => $this->input->post('name'),
                'desc'      => $this->input->post('desc')
            );

            $this->groups_models->insert($data);
            $this->session->set_flashdata('message_groups', '<div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button> Data Berhasil Disimpan. </div>');
            redirect('groups');
        }
    }

    /*
     * function untuk mengubah data groups
     */
    function update()
    {
        $this->ion_auth->is_allow('groups/' . __FUNCTION__);
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Nama Group', 'trim|required');
        $this->form_validation->set_rules('desc', 'Deskripsi Group', 'trim|required');
        $this->form_validation->set_error_delimiters('<div class="form-group has-error"><span class="help-block" >', '</span></div>');

        $id = base64_decode(urldecode($this->uri->segment(3)));
        if ($this->form_validation->run() == FALSE) {
            $data['groups'] = $this->groups_models->findbyid($id);
            $this->template->load('layout', 'update', $data);
            $this->session->set_flashdata('message_groups', '<div class="alert alert-danger alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button> Data gagal disimpan. </div>');
        } else {
            $data = array(
                'name'      => $this->input->post('name'),
                'desc'      => $this->input->post('desc')
            );

            $this->groups_models->update($id, $data);
            $this->session->set_flashdata('message_groups', '<div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button> Data Berhasil Disimpan. </div>');
            redirect('groups');
        }
    }

    /*
     * function untuk menghapus data groups
     */
    function delete()
    {
        $this->ion_auth->is_allow('groups/' . __FUNCTION__);
        $id = $this->uri->segment(3);
        $this->groups_models->delete($id);
        $this->session->set_flashdata('message_groups', '<div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button> Data Berhasil Dihapus. </div>');
        redirect('groups');
    }

    function detail()
    {
        //        $this->ion_auth->is_allow('groups/' . __FUNCTION__);
        $id = base64_decode(urldecode($this->uri->segment(3)));
        if (!$id || empty($id)) {
            redirect('groups', 'refresh');
        }
        $this->template->set('pageTitle', 'Manage Priviledge Group');
        $data['list_data'] = $this->menu_lib->prepare_list_menu($this->groups_models->get_manage_group_privileges($id)->result_array());
        $data['group_id'] = $id;
        $data['title'] = '<h2><i class="fa fa-users"></i> Groups</h2>';
        $this->template->load('layout', 'set_privilege', $data);
    }

    function create_privilege()
    {
        $id = $this->input->post('group_id');
        $id = $this->uri->segment(3);
        $group = $this->groups_models->findIdGroup($id);
        if (!empty($group)) {
            $this->groups_models->delete_privileges($id);
        }

        $count = $this->input->post('privileges');
        if (!empty($count)) {
            $jumlah = count($count);
            for ($i = 0; $i < $jumlah; $i++) {
                $menu = $count[$i];
                $data = array(
                    'group_id'      => $id,
                    'function_id'  => $menu,
                );
                $this->groups_models->insert_privileges($data);
            }
        }

        $this->detail();
    }
}
