<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uji_sample extends CI_Controller {

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
	// 	$this->load->view('uji_sample/welcome_message');
	// }

	public function index()
	{
		$this->load->model('uji_sample_model');
		$jumlah_data = $this->uji_sample_model->jumlah_data();
		$from = $this->uri->segment(3);
		$config['base_url'] = base_url().'index.php/uji_sample/index/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 10;
		$this->pagination->initialize($config);	
		$data['uji_sample'] = $this->uji_sample_model->get($config['per_page'],$from);
		$this->load->view('header');
		$this->load->view('uji_sample/list', $data);
		$this->load->view('footer');
	}

	public function show(){
		$this->load->model('uji_sample_model');

		$data['uji_sample'] = $this->uji_sample_model->show();
		$this->load->view('header');
		$this->load->view('uji_sample/show', $data);
		$this->load->view('footer');
	}

	public function create(){
		$this->load->view('header');
		$this->load->view('uji_sample/create');
		$this->load->view('footer');
	}

	public function update(){
		$this->load->model('uji_sample_model');
		$this->uji_sample_model->update();
		
		redirect('/uji_sample/');
	}

	public function save(){
		$this->load->model('uji_sample_model');
		$this->uji_sample_model->insert(); 
	 	$insert_id = $this->db->insert_id();
		
		redirect('/uji_sample/');
	}

	public function delete(){
		$this->load->model('uji_sample_model');
		$this->uji_sample_model->delete();
		
		redirect('/uji_sample/');
	}

	public function cetak(){
		$this->load->model('uji_sample_model');

		$data['uji_sample'] = $this->uji_sample_model->show();

		$this->load->view('uji_sample/cetak', $data);
	}
}
