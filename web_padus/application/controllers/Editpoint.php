<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Editpoint extends CI_Controller {

public function __construct(){
	parent::__construct();
	$this->load->model('Akun_model');
}
	public function index()
	{
		if(!isset($_SESSION['login'])) redirect(base_url().'loginadmin');
	   $data['akun'] = $this->Akun_model->view_user(); 
		$this->load->view('templates/header');	
		$data['judul'] = "Welcome To Halaman Admin Upload point !";


//bagian NAV=======================================
		$this->load->view('templates/headernav');	
		$this->load->view('admintemplates/navadmin', $data);
//bagian NAV=======================================

	
		$this->load->view('admintemplates/editpoint', $data);

		$this->load->view('templates/footer');			
	}
	public function updatepoint($nim){
		$this->Akun_model->updatepoint($nim, $this->input->post('point'));
		redirect('editpoint#editpoint');
	}
}
