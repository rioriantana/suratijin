<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ijin_magang_model extends CI_Model {

   	public $kepada;
	public $alamat_kepada;
	public $tempat_penelitian;
	public $tanggal_mulai;
	public $tanggal_selesai;
	public $nama_instansi;
	public $nama_pembimbing;
	public $nip_pembimbing;

	public $nama;
	public $nim;
	public $topik;


	 public function get($number,$offside){
	 	 $this->db->order_by("id", "desc"); 
	 	 $query = $this->db->get('ijin_magang',$number,$offside);
         return $query->result();

	 }

	 public function jumlah_data(){
	 	return $this->db->get('ijin_magang')->num_rows();
	 }

	 public function show(){

	 	 $query = $this->db->get_where('ijin_magang', array('id' => $_GET['id'] ));
         return $query->result();

	 }

	 public function mahasiswa(){

	 	 $query = $this->db->get_where('detail_ijin_magang', array('id_magang' => $_GET['id'] ));
         return $query->result();

	 }

	 public function insert(){

	 	$data = array(	'kepada' => $_POST['kepada'],
						'alamat_kepada' => $_POST['alamat_kepada'],
						'tempat_penelitian' => $_POST['tempat_penelitian'],
						'tanggal_mulai' => $_POST['tanggal_mulai'],
						'tanggal_selesai' => $_POST['tanggal_selesai'],
						'nama_instansi' => $_POST['nama_instansi'],
						'nama_pembimbing' => $_POST['nama_pembimbing'],
						'nip_pembimbing' => $_POST['nip_pembimbing']
					);
	 	$this->db->insert('ijin_magang', $data);
	 }

	 public function insertDetail(){

	 	$data = array(	'id_magang' => $_POST['id_magang'],
						'nama' => $_POST['nama'],
						'nim' => $_POST['nim'],
						'topik' => $_POST['topik']
					);
	 	$this->db->insert('detail_ijin_magang', $data);
	 }

	  public function update(){

	 	$data = array(	'kepada' => $_POST['kepada'],
						'alamat_kepada' => $_POST['alamat_kepada'],
						'tempat_penelitian' => $_POST['tempat_penelitian'],
						'tanggal_mulai' => $_POST['tanggal_mulai'],
						'tanggal_selesai' => $_POST['tanggal_selesai'],
						'nama_instansi' => $_POST['nama_instansi'],
						'nama_pembimbing' => $_POST['nama_pembimbing'],
						'nip_pembimbing' => $_POST['nip_pembimbing']
					);
	 	$this->db->where('id', $_POST['id']);
	 	$this->db->update('ijin_magang', $data); 
	 }

	 public function delete(){
	 	$this->db->where('id', $_GET['id']);
		$this->db->delete('ijin_magang'); 
	 }
	  public function deleteDetail(){
	 	$this->db->where('id', $_GET['id']);
		$this->db->delete('detail_ijin_magang'); 
	 }

}