<?php

class Akun_model extends CI_Model{

public function __construct(){
	parent::__construct();
}

public function insert_user()
	{
	$data = 
		[	'nama' => $this->input->post('nama'),
			'email' => $this->input->post('email'),
			'nim' => $this->input->post('nim'),
			'jurusan' => $this->input->post('jurusan')
		];
		
		$this->db->insert('anggotaukm', $data);

	}

public function nama_sudah_terdaftar(){
       $query = $this->db->get_where( 'anggotaukm', array( 'nama' => $nama) );

    }





public function view_user(){
	$query =  $this->db->get('anggotaukm');
	return $query->result_array();
	}

public function get_user(){
	$query =  $this->db->get_where('adminpadus', array (
												'email'=>$this->input->post('email'),
												'password'=>MD5($this->input->post('password'))
												
												));
	return $query->result_array();
	}




}

?>