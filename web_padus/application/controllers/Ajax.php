<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {

	public function __construct() {
        parent::__construct();

		$this->load->model('Akun_model');
    }	




	public function cekemailanggota(){
			
		 if( $this->Akun_model->email_sudah_terdaftar( $this->input->post('emailanggotanya') ) )
		 { echo "1"; }
   		 else 
   		 { echo "0"; }
	}

	public function ceknimnim(){
	
		 if( $this->Akun_model->nim_sudah_terdaftar( $this->input->post('nimanggotanya') ) )
		 { echo "1"; }
   		 else 
   		 { echo "0"; }
	}




}

?>