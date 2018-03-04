<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ijin_pinjam_alat_model extends CI_Model {

   	public $kepada;
	public $alamat_kepada;
	public $tempat_instansi;
	public $nama;
	public $nim;
	public $topik;
	public $nama_instansi;
	public $nama_alat;
	public $tanggal_mulai;
	public $tanggal_selesai;
	public $nama_pembimbing;
	public $nip_pembimbing;


	 public function get($number,$offside){
	 	 $this->db->order_by("id", "desc"); 
	 	 $query = $this->db->get('ijin_pinjam_alat',$number,$offside);
         return $query->result();

	 }

	  public function jumlah_data(){
	 	return $this->db->get('ijin_pinjam_alat')->num_rows();
	 }

	 public function show(){

	 	 $query = $this->db->get_where('ijin_pinjam_alat', array('id' => $_GET['id'] ));
         return $query->result();

	 }

	 public function insert(){

	 	$data = array(	'kepada' => $_POST['kepada'],
						'alamat_kepada' => $_POST['alamat_kepada'],
						'tempat_instansi' => $_POST['tempat_instansi'],
						'nama' => $_POST['nama'],
						'nim' => $_POST['nim'],
						'topik' => $_POST['topik'],
						'nama_alat' => $_POST['nama_alat'],
						'nama_instansi' => $_POST['nama_instansi'],
						'tanggal_mulai' => $_POST['tanggal_mulai'],
						'tanggal_selesai' => $_POST['tanggal_selesai'],
						'nama_pembimbing' => $_POST['nama_pembimbing'],
						'nip_pembimbing' => $_POST['nip_pembimbing']
					);
	 	$this->db->insert('ijin_pinjam_alat', $data);
	 }

	  public function update(){

	 	$data = array(	'kepada' => $_POST['kepada'],
						'alamat_kepada' => $_POST['alamat_kepada'],
						'tempat_instansi' => $_POST['tempat_instansi'],
						'nama' => $_POST['nama'],
						'nim' => $_POST['nim'],
						'topik' => $_POST['topik'],
						'nama_instansi' => $_POST['nama_instansi'],
						'nama_alat' => $_POST['nama_alat'],
						'tanggal_mulai' => $_POST['tanggal_mulai'],
						'tanggal_selesai' => $_POST['tanggal_selesai'],
						'nama_pembimbing' => $_POST['nama_pembimbing'],
						'nip_pembimbing' => $_POST['nip_pembimbing']
					);
	 	$this->db->where('id', $_POST['id']);
	 	$this->db->update('ijin_pinjam_alat', $data); 
	 }

	 public function delete(){
	 	$this->db->where('id', $_GET['id']);
		$this->db->delete('ijin_pinjam_alat'); 
	 }

}