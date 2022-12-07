<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of app_helper
 *
 * @author User
 */
class Menu_lib {

    //put your code here

    private $__var = '';
    private $__menu = array();
    private $__attrmenu = array(
        'name' => '',
        'link' => '#',
        'desc' => '--',
        'menu' => 't',
		'icon' => '',
        'id' => '',
        'kode' => ''
    );
    public $_request_kode = '';

    public function __construct() {
        $this->CI = & get_instance();
    }

    public function prepare_list_menu($data) {
        $this->clearmenu();
        //foreach ($data->result_array() as $row_m) {
        foreach ($data as $row_m) {
            $expl_kode = explode('~', $row_m['kode']);
            $kry = end($expl_kode);
            $this->push_item($expl_kode, $row_m);
        }
        return $this->__menu;
    }

    public function clearmenu() {
        $this->__menu = array();
    }

    private function push_item($expl, $item) {
        $this->__var = & $this->__menu;
        $___c = (int) count($expl);
        for ($___i = 0; $___i < $___c; $___i++) {
            if ($___i == ($___c - 1)) {
                if (isset($this->__var[$expl[$___i]])) {
                    if ($___i == ($___c - 1) && !empty($item['kode']) && $this->__var[$expl[$___i]]['desc'] == '--') {
                        foreach ($item as $_key => $value) {
                            $this->__var[$expl[$___i]][$_key] = $item[$_key];
                        }
                        return true;
                    } else {
                        $this->__var = & $this->__var[];
                    }
                } else {
                    $this->__var[$expl[$___i]] = array();
                    $this->__var = & $this->__var[$expl[$___i]];
                }
            } else {
                if (isset($this->__var[$expl[$___i]])) {
                    if (!isset($this->__var[$expl[$___i]]['child'])) {
                        $this->__var[$expl[$___i]]['child'] = array();
                    }
                    $this->__var = & $this->__var[$expl[$___i]]['child'];
                } else {
                    $this->__var[$expl[$___i]] = $this->__attrmenu;
                    if (!isset($this->__var[$expl[$___i]]['child'])) {
                        $this->__var[$expl[$___i]]['child'] = array();
                    }
                    $this->__var = & $this->__var[$expl[$___i]]['child'];
                }
            }
        }
        $this->__var = $item;
    }

    public function get_kode_privilege_from_request() {
        $this->CI->load->model('groups/groups_models');
        if ($this->CI->router->fetch_class() == $this->CI->router->fetch_module()) {
            $_request = $this->CI->router->fetch_class() . '/' . $this->CI->router->fetch_method();
        } else {
            $_request = $this->CI->router->fetch_module() . '/' . $this->CI->router->fetch_class() . '/' . $this->CI->router->fetch_method();
        }
        $result = $this->CI->groups_models->get_kode_privilege_by_url_request($_request);
        if ($result->num_rows() > 0) {
            $result = $result->row();
            $this->_request_kode = $result->kode;
            return true;
        } else {
            $_request = str_replace('/' . $this->CI->router->fetch_method(), '', $_request);
            $result = $this->CI->groups_models->get_kode_privilege_by_url_request($_request);
            if ($result->num_rows() > 0) {
                $result = $result->row();
                $this->_request_kode = $result->kode;
                return true;
            }
        }
    }

}
