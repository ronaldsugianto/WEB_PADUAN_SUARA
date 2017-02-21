<?php

class Akun_model extends CI_Model{

public function __construct(){
	parent::__construct();
}



/*====================pendaftaran ANGGOTA=========================== */
public function insert_user()
	{
	$data = 
		[	'nama' => $this->input->post('nama'),
			'email' => $this->input->post('email'),
			'nim' => $this->input->post('nim'),
			'jurusan' => $this->input->post('jurusan'),

		];
		
		$this->db->insert('anggotaukm', $data);

	}
/*=============================================================== */

/*====================LIHAT ANGGOTA urut sesuai nim=========================== */
	public function view_user(){
		$this->db->order_by('nim');
		$query =  $this->db->get('anggotaukm');
		return $query->result_array();
	}
/*=============================================================== */

/*====================LIHAT point anggota urut sesai banyak point=========================== */
	public function view_point(){
		$this->db->order_by('point','desc');
		$query =  $this->db->get('anggotaukm');
		return $query->result_array();
	}
/*=============================================================== */

/*====================HAPUS anggota=================================*/
	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
/*==========================================================================*/

/*=====================EDIT DATA ANGGOTA=====================*/
	function edit_data($where,$table){		
	return $this->db->get_where($table,$where);
	}


	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
/*======================================================================*/

/*=====================EDIT DATA ORGANISASI=====================*/
public function getorganisasi( $id = '0'){
	if( $id =='0') {
		$query =  $this->db->get('organisasi');
		return $query->result_array();
	} else {
		$query =  $this->db->get_where('organisasi',['id'=>$id]);
		return $query->row_array();		
	}
}


	function update_dataorg($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
/*======================================================================*/


/*=====================EDIT DATA kegiatan=====================*/
	function edit_datakg($where,$table){		
	return $this->db->get_where($table,$where);
	}


	function update_datakg($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
/*======================================================================*/

/*====================upload KEGIATAN============================= */
public function insert_kegiatan()
	{
	$data = 
		[	
			'idkegiatan' => $this->input->post('idkegiatan'),	
			'waktu' => $this->input->post('waktu'),
			'tanggal' => $this->input->post('tanggal'),
			'kegiatan' => $this->input->post('kegiatan'),
			'tempat' => $this->input->post('tempat')

		];
		
		$this->db->insert('kegiatanukm', $data);

	}
/*=============================================================== */

/*====================LIHAT KEGIATAN============================= */
	public function view_kegiatan(){
		$query =  $this->db->get('kegiatanukm');
		return $query->result_array();
	}
/*=============================================================== */

/*=========================HAPUS kegiatan======================*/
	function hapus_kegiatan($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
/*==========================================================================*/



/*=============================BAGIAN AJAX PENDAFTARAN=================================*/
	public function email_sudah_terdaftar( $email ){
	      $query = $this->db->get_where( 'anggotaukm', array( 'email' => $email) );
 
    if( !empty( $query->row_array() ) ) {
	            return true;
	        }
	        return false;                    

	}

	public function nim_sudah_terdaftar( $nim ) {

		$query = $this->db->get_where( 'anggotaukm', array( 'nim' => $nim) );
		
		if( !empty( $query->row_array() ) ){
			return true;
		}
		return false;
	}
/*=========================================================================*/


/*===============================LOGIN ADMIN=============================*/
	public function get_user(){
	$query =  $this->db->get_where('adminpadus', array (
												'email'=>$this->input->post('email'),
												'password'=>MD5($this->input->post('password'))
												
												));

	return $query->result_array();
	}
/*=========================================================================*/

/*==========================TAMBAH POINT==========================*/
	function updatepoint($nim, $point){

		$this->db->where('nim',$nim);
		$nilai = 'point+'.$point;
		
		$this->db->set('point', $nilai, FALSE);
		$this->db->update('anggotaukm');
	}
/*=============================================================*/


}

?>