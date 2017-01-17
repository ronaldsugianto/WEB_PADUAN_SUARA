<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loginadmin extends CI_Controller {


	public function index( $status = 0 )
	{
		if(isset($_SESSION['login'])) redirect(base_url().'editanggota');

		$this->load->view('TemplatesLogin/headerlogin');

		$this->load->view('loginadmin');

		$this->load->view('templates/footer');			
	}
}
