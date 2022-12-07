<?php
/**
 * Created by PhpStorm.
 * User: daesuke
 * Date: 7/8/2019
 * Time: 2:27 PM
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once dirname(__FILE__) . '/tcpdf/tcpdf.php';

class Pdf extends TCPDF
{
    function __construct()
    {
        parent::__construct();
    }
}
