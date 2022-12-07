<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * CODEIGNITER template library
 *
 * @author	Jérôme Jaglale
 * @url		http://maestric.com/doc/php/codeigniter_template
 */
class Template {

    var $CI;
    var $template_data = array();
    var $config_pagination = array(
        'full_tag_open' => "<div class='tPages'><ul class='pages'>",
        'full_tag_close' => "</ul></div>",
        'num_tag_open' => "<li>",
        'num_tag_close' => "</li>",
        'cur_tag_open' => "<li><a class='active' title='' href='#'>",
        'cur_tag_close' => "</a></li>",
        'next_tag_open' => "<li class='next'>",
        'next_link' => '›',
        'next_tag_close' => "</li>",
        'prev_tag_open' => "<li class='prev'>",
        'prev_link' => "‹ ",
        'prev_tag_close' => "</li>",
        'first_tag_open' => "<li class='first'>",
        'first_tag_close' => "</li>",
        'last_tag_open' => "<li class='last'>",
        'last_tag_close' => "</li>",
        'num_links' => 3, // jumlah link setelah dan sesudah current page
    );
    var $template_message_error = '<div class="alert alert-danger">
                        <button data-dismiss="alert" class="close">&nbsp;</button>
                        <i class="fa fa-times-circle"></i>
                        %s </div>';
    var $template_message_success = '<div class="alert alert-success">
                        <button data-dismiss="alert" class="close">&nbsp;</button>
                        <i class="fa fa-check-circle"></i>
                        %s </div>';
	var $template_message_info = '<div class="alert alert-info">
                        <button data-dismiss="alert" class="close">&nbsp;</button>
                        <i class="fa fa-check-circle"></i>
                        %s </div>';
	var $template_message_warning = '<div class="alert alert-warning">
                        <button data-dismiss="alert" class="close">&nbsp;</button>
                        <i class="fa fa-check-circle"></i>
                        %s </div>';


    public function __construct() {
        $this->CI = & get_instance();
        $this->CI->load->library('ion_auth');

    }

    function set($name, $value) {
        $this->template_data[$name] = $value;
    }

    function load($template = '', $view = '', $view_data = array(), $return = FALSE) {
        $this->template_data['menu'] = $this->CI->ion_auth->get_menu();
        $this->set('CONTENTS', $this->CI->load->view($view, $view_data, TRUE));

        return $this->CI->load->view($template, $this->template_data, $return);
    }

    function pagination_config($key, $value) {
        $this->config_pagination[$key] = $value;
    }

    function get_pagination_config() {
        return $this->config_pagination;
    }

}

/* End of file Template.php */
/* Location: ./application/libraries/Template.php */