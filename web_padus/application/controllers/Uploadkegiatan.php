<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uploadkegiatan extends CI_Controller {


	public function index()
	{
		$this->load->view('templates/header');	
		$this->load->view('admintemplates/uploadkegiatan');
		$this->load->view('templates/footer');			
	}
}
