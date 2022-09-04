<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';

// Semua atur route disini
// BACKOFFICE
$route['backoffice'] = 'backoffice/authentication';
$route['backoffice/auth/login'] = 'backoffice/authentication/login';
$route['backoffice/auth/logout'] = 'backoffice/authentication/logout';

$route['404_override'] = 'err_page';
$route['translate_uri_dashes'] = FALSE;
