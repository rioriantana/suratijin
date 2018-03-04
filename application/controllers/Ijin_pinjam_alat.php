<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ijin_pinjam_alat extends CI_Controller {

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
	// 	$this->load->view('ijin_pinjam_alat/welcome_message');
	// }

	public function index()
	{
		$this->load->model('ijin_pinjam_alat_model');
		$jumlah_data = $this->ijin_pinjam_alat_model->jumlah_data();
		$from = $this->uri->segment(3);
		$config['base_url'] = base_url().'index.php/ijin_pinjam_alat/index/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 10;
		$this->pagination->initialize($config);	
		$data['pinjam_alat'] = $this->ijin_pinjam_alat_model->get($config['per_page'],$from);
		$this->load->view('header');
		$this->load->view('ijin_pinjam_alat/list', $data);
		$this->load->view('footer');
	}

	public function show(){
		$this->load->model('ijin_pinjam_alat_model');

		$data['pinjam_alat'] = $this->ijin_pinjam_alat_model->show();
		$this->load->view('header');
		$this->load->view('ijin_pinjam_alat/show', $data);
		$this->load->view('footer');
	}

	public function create(){
		$this->load->view('header');
		$this->load->view('ijin_pinjam_alat/create');
		$this->load->view('footer');
	}

	public function update(){
		$this->load->model('ijin_pinjam_alat_model');
		$this->ijin_pinjam_alat_model->update();
		redirect('/ijin_pinjam_alat/');
	}

	public function save(){
		$this->load->model('ijin_pinjam_alat_model');
		$this->ijin_pinjam_alat_model->insert(); 
	 	$insert_id = $this->db->insert_id();
		redirect('/ijin_pinjam_alat/');
	}

	public function delete(){
		$this->load->model('ijin_pinjam_alat_model');
		$this->ijin_pinjam_alat_model->delete();
		redirect('/ijin_pinjam_alat/');
	}

	public function cetak(){
		$this->load->model('ijin_pinjam_alat_model');
		$data['pinjam_alat'] = $this->ijin_pinjam_alat_model->show();
		$this->load->view('ijin_pinjam_alat/cetak', $data);
	}
}
