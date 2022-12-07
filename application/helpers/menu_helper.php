<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * MENU HELPER
 *
 * An open source application development framework for PHP 5.1.6 or newer
 *
 * @package		Helpers
 * @author		Kawulo Alit Seneng Sinau
 * @copyright           Copyright (c) 2014, Kawulo Alit Seneng Sinau, Inc.
 * @license		FREE
 * @link
 * @since		Version 1.0
 * @filesource
 */
// ------------------------------------------------------------------------

if (!function_exists('_render_manage_menu')) {

    function _render_manage_menu($list_data, $CI = false) {
        if (!is_object($CI)) {
            $CI = & get_instance();
        }
        foreach ($list_data as $kd => $row_list) {
            if (isset($row_list['child'])) {
                $__treetype = 'folder';
                $__icontree = '<i class="icon-folder-close"></i>';
            } else {
                $__treetype = 'item';
                $__icontree = '';
            }
            echo '<div style="display: block;" class="tree-' . $__treetype . '">
                    <div class="tree-folder-header" title="' . $row_list['name'] . '">
                        ' . $__icontree . '
                        <div class="tree-folder-name">' . (empty($row_list['desc'])?('link : '.$row_list['name']):$row_list['desc']) . '
                            <div class="tree-actions"
                                data-kode="' . ((isset($row_list['kode']) && !empty($row_list['kode'])) ? $row_list['kode'] : $kd) . '"
                                data-label="' . $row_list['desc'] . '"
                                data-idprivilege="' . $row_list['id'] . '"
                                data-icon="' . $row_list['icon'] . '"
                                data-showmenu="' . $row_list['menu'] . '"
                                data-url="' . $row_list['name'] . '">
                                <i class="fa fa-plus-square" onclick="modal_add(this);"></i>
                                <i class="fa fa-edit" onclick="modal_edit(this);"></i>
                                <i >
                                    <a href="' . site_url($CI->router->fetch_class() . '/' . $CI->router->fetch_method() . '/act/del/id/' . $row_list['id']) . '"
                                        onclick="return confirm(\'Apakah anda yakin akan menghapus data ini?\')" class="icon-remove">
                                    </a>
                                </i>
                            </div>
                        </div>
                    </div>';
            if (isset($row_list['child'])) {
                _render_manage_menu($row_list['child'], $CI);

            }
            echo '</div>';
        }
    }

}

if (!function_exists('_render_manage_priviledge')) {

    function _render_function_manage_priviledge($list_data, $CI = false) {
        if (!is_object($CI)) {
            $CI = & get_instance();
        }
        foreach ($list_data as $kd => $row_list) {
            if (isset($row_list['child'])) {
                $__treetype = 'folder';
                $__icontree = '<i class="icon-folder-open"></i>';
            } else {
                $__treetype = 'item';
                $__icontree = '';
            }
            $access = (!empty($row_list['id_priviledge']) && $row_list['id_priviledge'] !== NULL) ? TRUE : FALSE;
            echo '<div style="display: block;" class="tree-' . $__treetype . '">
                    <div class="tree-folder-header" title="' . $row_list['name'] . '">
                        ' . $__icontree . '
                        <div class="tree-folder-name">' . $row_list['desc'] . '
                            ' . form_checkbox(
                                    array(
                                    'name' => 'privileges[]',
                                    'id' => $row_list['id'],
                                    'value' => $row_list['id'],
                                    'checked' => $access,
                                    )
                                ) . '
                        </div>
                    </div>';
            if (isset($row_list['child'])) {
                echo '<div class="tree-folder-content">';
                _render_function_manage_priviledge($row_list['child'], $CI);
                echo '</div>';
            }
            echo '</div>';
        }
    }

}

if (!function_exists('_render_menu_for_layout')) {

    function _render_menu_for_layout($list_data, $CI = false) {
        if (!is_object($CI)) {
            $CI = & get_instance();
            $CI->menu_lib->get_kode_privilege_from_request();
        }
        foreach ($list_data as $kd => $row_list) {
            if (preg_match("/#/i", $row_list['link'])) {
                $row_list['link'] = 'javascript:;';
            } else {
                $row_list['link'] = site_url($row_list['link']);
            }
            if (!empty($row_list['kode']) && preg_match("/".$row_list['kode']."/i", $CI->menu_lib->_request_kode)) {
                $__liactive = 'active';
                $__spanopen = 'open';
                $__spanselected = '<span class="selected"></span>';
            }else{
                $__liactive = '';
                $__spanopen = '';
                $__spanselected = '';
            }
            if (isset($row_list['child']) && !empty($row_list['child'])) {
                $__spanhaschild = '<span class="fa arrow '.$__spanopen.'"></span>';
            }else{
                $__spanhaschild = '<span class="'.$__spanopen.'"></span>';
            }
            echo '<li class="'.$__liactive.'">
                        <a class="'.$__liactive.'" href="'.$row_list['link'].'">
                                    '.$row_list['icon']. $row_list['desc'] . $__spanselected . $__spanhaschild .'
                        </a>';
                if (isset($row_list['child']) && !empty($row_list['child'])) {
                    echo '<ul class="nav nav-second-level collapse">';
                    _render_menu_for_layout($row_list['child'], $CI);
                    echo '</ul>';
                }
            echo '</li>';
        }
    }

}
// ------------------------------------------------------------------------





/* End of file menu_helper.php */
/* Location: ./applications/helpers/menu_helper.php */