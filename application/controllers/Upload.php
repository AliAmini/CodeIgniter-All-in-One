<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Upload extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(['url', 'form']);
	}

	public function index()
	{
		$this->blade->view('upload.upload', ['error' => '']);
	}

	public function uploadFile()
	{
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'png|jpg|gif';
		$config['max_size'] = '100'; // in KB
		$config['max_width'] = '1600';
		$config['max_height'] = '900';

		$this->load->library('upload', $config);

		if(! $this->upload->do_upload()){
			$error = $this->upload->display_errors();
			$this->blade->view('upload.upload', ['error' => $error]);
		} 
		else {
			$data = ['upload_data' => $this->upload->data()];
			$this->blade->view('upload.success', $data);
		}
	}
}
