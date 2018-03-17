<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ijin_akses_lab_model extends CI_Model {

   	public $kepada;
	public $alamat_kepada;
	public $tempat_penelitian;
	public $nama;
	public $nim;
	public $keperluan;
	public $nama_instansi;
	public $tanggal_mulai;
	public $tanggal_selesai;
	public $instansi_pemohon;
	public $nama_pembimbing;
	public $nip_pembimbing;


	 public function get($number,$offside){
	 	 $this->db->order_by("id", "desc"); 
	 	 $query = $this->db->get('ijin_akses_lab',$number,$offside);
         return $query->result();

	 }

	  public function jumlah_data(){
	 	return $this->db->get('ijin_akses_lab')->num_rows();
	 }

	 public function show(){

	 	 $query = $this->db->get_where('ijin_akses_lab', array('id' => $_GET['id'] ));
         return $query->result();

	 }

	 public function insert(){

	 	$data = array(	'kepada' => $_POST['kepada'],
						'alamat_kepada' => $_POST['alamat_kepada'],
						'tempat_penelitian' => $_POST['tempat_penelitian'],
						'nama' => $_POST['nama'],
						'nim' => $_POST['nim'],
						'keperluan' => $_POST['keperluan'],
						'nama_instansi' => $_POST['nama_instansi'],
						'tanggal_mulai' => $_POST['tanggal_mulai'],
						'tanggal_selesai' => $_POST['tanggal_selesai'],
						'instansi_pemohon' => $_POST['instansi_pemohon'],
						'nama_pembimbing' => $_POST['nama_pembimbing'],
						'nip_pembimbing' => $_POST['nip_pembimbing']
					);
	 	$this->db->insert('ijin_akses_lab', $data);
	 }

	  public function update(){

	 	$data = array(	'kepada' => $_POST['kepada'],
						'alamat_kepada' => $_POST['alamat_kepada'],
						'tempat_penelitian' => $_POST['tempat_penelitian'],
						'nama' => $_POST['nama'],
						'nim' => $_POST['nim'],
						'keperluan' => $_POST['keperluan'],
						'nama_instansi' => $_POST['nama_instansi'],
						'tanggal_mulai' => $_POST['tanggal_mulai'],
						'tanggal_selesai' => $_POST['tanggal_selesai'],
						'instansi_pemohon' => $_POST['instansi_pemohon'],
						'nama_pembimbing' => $_POST['nama_pembimbing'],
						'nip_pembimbing' => $_POST['nip_pembimbing']
					);
	 	$this->db->where('id', $_POST['id']);
	 	$this->db->update('ijin_akses_lab', $data); 
	 }

	 public function delete(){
	 	$this->db->where('id', $_GET['id']);
		$this->db->delete('ijin_akses_lab'); 
	 }

}