<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {

	public function __construct() {
        parent::__construct();

		$this->load->model('Akun_model');
    }	


	function ceknamaanggota(){
		 if( $this->user_model->nama_sudah_terdaftar( $this->input->post('namaanggotanya') ) )
		 { echo "1"; }
   		 else 
   		 { echo "0"; }


	}
}

?>