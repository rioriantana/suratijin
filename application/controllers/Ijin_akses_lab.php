<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ijin_akses_lab extends CI_Controller {

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
	// 	$this->load->view('ijin_akses_lab/welcome_message');
	// }

	public function index()
	{
		$this->load->model('ijin_akses_lab_model');
		$jumlah_data = $this->ijin_akses_lab_model->jumlah_data();
		$from = $this->uri->segment(3);
		$config['base_url'] = base_url().'index.php/ijin_akses_lab/index/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 10;
		$this->pagination->initialize($config);	
		$data['ijin_akses_lab'] = $this->ijin_akses_lab_model->get($config['per_page'],$from);
		$this->load->view('header');
		$this->load->view('ijin_akses_lab/list', $data);
		$this->load->view('footer');
	}

	public function show(){
		$this->load->model('ijin_akses_lab_model');

		$data['ijin_akses_lab'] = $this->ijin_akses_lab_model->show();
		$this->load->view('header');
		$this->load->view('ijin_akses_lab/show', $data);
		$this->load->view('footer');
	}

	public function create(){
		$this->load->view('header');
		$this->load->view('ijin_akses_lab/create');
		$this->load->view('footer');
	}

	public function update(){
		$this->load->model('ijin_akses_lab_model');
		$this->ijin_akses_lab_model->update();
		
		redirect('/ijin_akses_lab/');
	}

	public function save(){
		$this->load->model('ijin_akses_lab_model');
		$this->ijin_akses_lab_model->insert(); 
	 	$insert_id = $this->db->insert_id();
		
		redirect('/ijin_akses_lab/');
	}

	public function delete(){
		$this->load->model('ijin_akses_lab_model');
		$this->ijin_akses_lab_model->delete();
		
		redirect('/ijin_akses_lab/');
	}

	public function cetak(){
		$this->load->model('ijin_akses_lab_model');

		$data['ijin_akses_lab'] = $this->ijin_akses_lab_model->show();

		$this->load->view('ijin_akses_lab/cetak', $data);
	}
}
