<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uploadkegiatan extends CI_Controller {


	public function index()
	{
		if(!isset($_SESSION['login'])) redirect(base_url().'loginadmin');
		$this->load->view('templates/header');	
		$this->load->view('admintemplates/uploadkegiatan');
		$this->load->view('templates/footer');			
	}
}
