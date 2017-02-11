<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akun extends CI_Controller {

	public function __construct(){
	parent::__construct();
	$this->load->model('Akun_model');
	}


/*=====================PENDAFTARAN ANGGOTA==============================*/
	public function pendaftaran(){
		$this->Akun_model->insert_user(); //
		redirect('anggota#anggota');
	}
/*=========================================================================*/

/*=============================HAPUS ANGGOTA=======================*/
	function hapus($nim){
		$where = array('nim' => $nim);
		$this->Akun_model->hapus_data($where,'anggotaukm');
		redirect('editanggota#editanggota');
	}
/*==========================================================================*/

/*======================= EDIT ANGGOTA =========================*/
	function edit($nim){
	$where = array('nim' => $nim);
$data['anggotaukm'] = $this->Akun_model->edit_data($where,'anggotaukm')->result();
	$this->load->view('v_edit', $data );
	}


	function update(){
		$nim = $this->input->post('nim');
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$jurusan = $this->input->post('jurusan');

		$data = array(
			'nim' => $nim,
			'nama' => $nama,
			'email' => $email,
			'jurusan' => $jurusan
		);

		$where = array(
			'nim' => $nim
		);

		$this->Akun_model->update_data($where,$data,'anggotaukm');
		redirect('editanggota#editanggota');
	}
/*======================= ================================================*/


/*======================= EDIT ORGANISASI =========================*/



	function updateorg(){
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$jabatan = $this->input->post('jabatan');
		$link = $this->input->post('link');
		$linktwit = $this->input->post('linktwit');

		$data = array(
			'id' => $id,
			'nama' => $nama,
			'jabatan' => $jabatan,
			'link' => $link,
			'linktwit' => $linktwit			
		);

		$where = array(
			'id' => $id
		);

		$this->Akun_model->update_dataorg($where,$data,'organisasi');
		redirect('editorganisasi#editorganisasi');
	}
/*======================= ================================================*/

/*======================= EDIT KEGIATAN=========================*/
	public function editkg($idkegiatan){
	$where = array('idkegiatan' => $idkegiatan);
$data['kegiatanukm'] = $this->Akun_model->edit_datakg($where,'kegiatanukm')->result();
	$this->load->view('v_editkegiatan', $data );
	}


	public function updatekg(){
		$idkegiatan= $this->input->post('idkegiatan');
		$waktu = $this->input->post('waktu');
		$tanggal = $this->input->post('tanggal');
		$kegiatan = $this->input->post('kegiatan');
		$tempat = $this->input->post('tempat');

		$data = array(

			'waktu' => $waktu,
			'tanggal' => $tanggal,
			'kegiatan' => $kegiatan,
			'tempat' => $tempat
		);

		$where = array(
			'idkegiatan' => $idkegiatan
		);

		$this->Akun_model->update_datakg($where,$data,'kegiatanukm');
		redirect('editkegiatan#editkegiatan');
	}
/*=======================================================================*/

/*=====================UPLOAD KEGIATAN==============================*/
	public function upload(){
		$this->Akun_model->insert_kegiatan(); 
		redirect('editkegiatan#editkegiatan');
	}
/*=========================================================================*/

/*=============================HAPUS KEGIATAN=======================*/
	function hapuskegiatan($idkegiatan){
		$where = array('idkegiatan' => $idkegiatan);
		$this->Akun_model->hapus_kegiatan($where,'kegiatanukm');
		redirect('editkegiatan#editkegiatan');
	}
/*==========================================================================*/


// ==========================LOGIN ADMIN===================================
	public function login(){

		if ($user= $this->Akun_model->get_user() ){
			$_SESSION['login'] = 1;
			redirect('editanggota');
		}else{
			$_SESSION['notif'] = 1;
			redirect('loginadmin');
		}
	}

	//========logout==============
	public function logout(){
		session_destroy();
		redirect('homepage');
	}
// ========================================================================

}
