<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Songlist extends CI_Controller {


	public function index()
	{
		$this->load->view('templates/headersonglist');
		$data['judul'] = "Welcome To Song list";

//bagian NAV=======================================
		$this->load->view('templates/headernav');	
		$this->load->view('templates/navindex');
		$this->load->view('templates/footernav', $data);
//bagian NAV=======================================

		
		$this->load->view('songlist');

		$this->load->view('templates/footer');			
	}
}
