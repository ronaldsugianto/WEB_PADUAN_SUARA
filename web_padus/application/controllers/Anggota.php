<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota extends CI_Controller {

public function __construct(){
	parent::__construct();
	$this->load->model('Akun_model');
}
	public function index()
	{
	   $data['akun'] = $this->Akun_model->view_user(); 
		$this->load->view('templates/header');	
		$data['judul'] = "Welcome To Halaman Anggota UKM Paduan Suara!";


//bagian NAV=======================================
		$this->load->view('templates/headernav');	
		$this->load->view('templates/navindex');
		$this->load->view('templates/footernav', $data);
//bagian NAV=======================================

	
		$this->load->view('anggota', $data);

		$this->load->view('templates/footer');			
	}
}
