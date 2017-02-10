<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Editorganisasi extends CI_Controller {

public function __construct(){
	parent::__construct();
	$this->load->model('Akun_model');
}
	public function index()
	{
		if(!isset($_SESSION['login'])) redirect(base_url().'loginadmin');
	   $data['akun'] = $this->Akun_model->view_user(); 
		$this->load->view('templates/header');	
		$data['judul'] = "Welcome To Halaman Admin Untuk Edit organisasi !";


//bagian NAV=======================================
		$this->load->view('templates/headernav');	
		$this->load->view('admintemplates/navadmin', $data);
//bagian NAV=======================================

	
		$this->load->view('admintemplates/editorganisasi', $data);

		$this->load->view('templates/footer');			
	}


// ================================================ Function Ketua

	public function update_ketua()
	{
		move_uploaded_file($_FILES['foto']['tmp_name'], './asset/foto/ketua.jpg');
		// redirect( base_url().'editorganisasi');
	}

	public function update_sekertaris()
	{
		move_uploaded_file($_FILES['foto']['tmp_name'], './asset/foto/sekertaris.jpg');
		 redirect( base_url().'editorganisasi');
	}

	public function update_wakilketua()
	{
		move_uploaded_file($_FILES['foto']['tmp_name'], './asset/foto/wakilketua.jpg');
		 redirect( base_url().'editorganisasi');
	}

// ================================================ 


}
