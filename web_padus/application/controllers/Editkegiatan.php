<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Editkegiatan extends CI_Controller {

public function __construct(){
	parent::__construct();
	$this->load->model('Akun_model');
}
	public function index()
	{
	   $data['akun'] = $this->Akun_model->view_kegiatan(); 
		$this->load->view('templates/header');	
		$data['judul'] = "Welcome To Halaman Admin, Edit Kegiatan !";


//bagian NAV=======================================
		$this->load->view('templates/headernav');	
		$this->load->view('admintemplates/navadmin', $data);
//bagian NAV=======================================

	
		$this->load->view('admintemplates/editkegiatan', $data);

		$this->load->view('templates/footer');			
	}
}
