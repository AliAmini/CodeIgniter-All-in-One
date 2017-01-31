<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		// load model
		$this->load->model('payment_model', 'payment');
		$db_data = $this->payment->getData();

		$data = array(
            'title' => 'Blade template engine for Codeigniter 3.0+',
            'content' => 'index page. Have fun ;)',
            'data' => $db_data
        );
        $this->blade->view('index', $data);
	}
}
