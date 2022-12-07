<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/* 
 *  ======================================= 
 *  Author     : Muhammad Surya Ikhsanudin 
 *  License    : Protected 
 *  Email      : mutofiyah@gmail.com 
 *   
 *  Dilarang merubah, mengganti dan mendistribusikan 
 *  ulang tanpa sepengetahuan Author 
 *  ======================================= 
 */
//require_once APPPATH."third_party/PHPExcel.php";
include APPPATH . 'third_party/PHPExcel.php';
//set_include_path(get_include_path() . PATH_SEPARATOR . dirname(__FILE__) . 'third_party/PHPExcel/PHPExcel.php');
/** PHPExcel root directory */
// if (!defined('PHPEXCEL_ROOT')) {
//     define('PHPEXCEL_ROOT', dirname(__FILE__) . '/');
//     require(PHPEXCEL_ROOT . 'third_party/PHPExcel/Autoloader.php'); //Error Line
// }
class Excel extends PHPExcel
{
    public function __construct()
    {
        parent::__construct();
    }
}
