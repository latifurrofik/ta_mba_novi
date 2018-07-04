<?php
defined('BASEPATH') OR exit('No direct script access allowed');



$route['default_controller'] = 'main';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['pendaftaran'] 			= 'Main/pendaftaran';
$route['verifikasi'] 			= 'Main/verifikasi';
$route['progress'] 			= 'Main/progress';
$route['logout'] 			= 'Main/logout';