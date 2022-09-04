<?php
defined('BASEPATH') or exit('No direct script access allowed');

$autoload['packages'] = array();
// tambahkan database jika sudah bermain database
$autoload['libraries'] = array('session', 'encryption', 'form_validation', 'email', 'upload', 'user_agent');
$autoload['drivers'] = array();
// buat custom helper dengan nama bebas tetapi format nama file harus nama_helper, e.g berkarya_helper
$autoload['helper'] = array('url', 'berkarya', 'text');
$autoload['config'] = array();
$autoload['language'] = array();
$autoload['model'] = array();
