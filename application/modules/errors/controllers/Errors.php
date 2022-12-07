<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Errors extends MX_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $data['title'] = ' DATA TIDAK DITEMUKAN ';
        // $this->template->load('layout', 'index', $data);
        $this->load->view('index', $data);
    }
}
