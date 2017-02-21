<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*  HALAMAN LOGIN DAN halaman awal  */
$route['default_controller'] = 'homepage';


/****BAGIAN PROSES LOGIN DAN FORM LOGIN*************************/
$route['loginadmin'] = 'loginadmin';
$route['user/logout'] = 'Akun/logout';
/****************************************************************/


/*****MENU PILIHAN*****/
$route['home'] = 'home';
$route['point'] = 'point';
$route['songlist'] = 'songlist';
/***********************/

/***********PENDAFTARAN ANGGOTA******************/
$route['pendaftaran'] = 'Akun/pendaftaran';
$route['anggota'] = 'anggota';
/**********************************************/

/***********AJAX******************/
$route['ajax/cekemail'] = 'ajax/cekemailanggota';
$route['ajax/ceknim'] = 'ajax/ceknimnim';
/********************************/

/***********ADMIN******************/
$route['login'] = 'akun/login';
$route['editanggota'] = 'editanggota';
$route['editpoint'] = 'editpoint';
$route['uploadkegiatan'] = 'uploadkegiatan';
$route['editkegiatan'] = 'editkegiatan';
/*********************************/
$route['editorganisasi'] = 'editorganisasi';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

/***************************UPLOAD POINT*******************/
$route['updatepoint/(:any)'] = 'editpoint/updatepoint/$1';
/**********************************************************/