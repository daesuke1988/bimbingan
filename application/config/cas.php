<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config['cas_server_url'] = 'https://sso-internet.uny.ac.id';

$config['phpcas_path'] = APPPATH.'/third_party/CAS-1.3.3';

$config['cas_disable_server_validation'] = TRUE;

$config['cas_debug'] = TRUE;

$config['changeSessionId'] = FALSE;
