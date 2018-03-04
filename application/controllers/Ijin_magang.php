<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ijin_magang extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	// public function index()
	// {
	// 	$this->load->view('ijin_magang/welcome_message');
	// }

	public function index()
	{
		$this->load->model('ijin_magang_model');
		$jumlah_data = $this->ijin_magang_model->jumlah_data();
		$from = $this->uri->segment(3);
		$config['base_url'] = base_url().'index.php/ijin_magang/index/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 10;
		$this->pagination->initialize($config);	
		$data['magang'] = $this->ijin_magang_model->get($config['per_page'],$from);

		$this->load->view('header');
		$this->load->view('ijin_magang/list', $data);
		$this->load->view('footer');

	}

	public function show(){
		$this->load->model('ijin_magang_model');

		$data['magang'] = $this->ijin_magang_model->show();
		$this->load->view('header');	
		$this->load->view('ijin_magang/show', $data);
		$this->load->view('footer');
	}

	public function detail(){
		$this->load->model('ijin_magang_model');
		$data['magang'] = $this->ijin_magang_model->show();
		$data['mahasiswa'] = $this->ijin_magang_model->mahasiswa();
		$this->load->view('header');	
		$this->load->view('ijin_magang/detail', $data);
		$this->load->view('footer');
	}

	public function createDetail(){
		$this->load->view('header');
		$this->load->view('ijin_magang/createDetail');
		$this->load->view('footer');
	}

	public function create(){
		$this->load->view('header');
		$this->load->view('ijin_magang/create');
		$this->load->view('footer');
	}

	public function update(){
		$this->load->model('ijin_magang_model');
		$this->ijin_magang_model->update();
		redirect('/ijin_magang/');
	}

	public function updateDetail(){
		$this->load->model('ijin_magang_model');
		$this->ijin_magang_model->updateDetail();
		redirect('/ijin_magang/detail?id='.$_POST['id_magang']);
	}

	public function save(){
		$this->load->model('ijin_magang_model');
		$this->ijin_magang_model->insert(); 
	 	$insert_id = $this->db->insert_id();
		redirect('/ijin_magang/detail?id='.$insert_id);
	}

	public function saveDetail(){
		$this->load->model('ijin_magang_model');
		$this->ijin_magang_model->insertDetail(); 
	 	$insert_id = $this->db->insert_id();
		redirect('/ijin_magang/detail?id='.$_POST['id_magang']);
	}

	public function delete(){
		$this->load->model('ijin_magang_model');
		$this->ijin_magang_model->delete();
		redirect('/ijin_magang/');
	}

	public function deleteDetail(){
		$this->load->model('ijin_magang_model');
		$this->ijin_magang_model->deleteDetail();
		redirect('/ijin_magang/detail?id='.$_GET['id_magang']);
	}

	public function cetak(){
		$this->load->model('ijin_magang_model');
		$data['magang'] = $this->ijin_magang_model->show();
		$data['mahasiswa'] = $this->ijin_magang_model->mahasiswa();
		$this->load->view('ijin_magang/cetak', $data);
	}
}
