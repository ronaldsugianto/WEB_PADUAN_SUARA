<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*  HALAMAN LOGIN DAN halaman awal  */
$route['default_controller'] = 'homepage';
$route['loginadmin'] = 'loginadmin';


/*****halaman web padus*****/
$route['home'] = 'home';
$route['point'] = 'point';
$route['songlist'] = 'songlist';
/***********************/

/***********ANGGOTA MENDAFTAR******************/
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


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
