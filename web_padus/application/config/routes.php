<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*  HALAMAN LOGIN DAN SIGNUP  */
$route['default_controller'] = 'homepage';
$route['loginadmin'] = 'loginadmin';



$route['home'] = 'home';

$route['point'] = 'point';
$route['songlist'] = 'songlist';
$route['login'] = 'akun/login';

$route['pendaftaran'] = 'Akun/pendaftaran';




$route['anggota'] = 'anggota';




$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
