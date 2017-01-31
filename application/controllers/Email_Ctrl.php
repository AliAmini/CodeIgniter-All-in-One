<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Email_Ctrl extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session'); 
		$this->load->helper('form');
	}

	public function index()
	{
		$this->blade->view('email');
	}

	public function sendMail()
	{
		$from_mail = 'info@domain.com';
		$to_mail = $this->input->post('email');

		$this->load->library('email');

		$this->email->from($from_mail, 'Ali Alavian');
		$this->email->to($to_mail);
		$this->email->subject('Sample Email');
		$this->email->message('Test email text.');

		if($this->email->send())
			$this->session->set_userdata("email_sent","Email sent successfully."); 
		else
			$this->session->set_userdata("email_sent","Error in sending Email.");

		$this->blade->load('email');
	}

}
