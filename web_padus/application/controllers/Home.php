<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function index()
	{
		$this->load->view('templates/header');	
		$data['judul'] = "Welcome To The Web Paduan Suara!";


//bagian NAV=======================================
		$this->load->view('templates/headernav');	
		$this->load->view('templates/navhome');
		$this->load->view('templates/footernav', $data);						
//bagian NAV=======================================


		$this->load->view('home');

		$this->load->view('templates/footer');			
	}
}
