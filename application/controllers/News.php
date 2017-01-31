<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class News extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('news_model');
		$this->load->helper('url_helper');
	}

	public function index()
	{
		$data['news'] = $this->news_model->get_news();
        $data['title'] = 'News archive';

        $this->blade->view('news.news', $data);
	}

	public function view($slug = NULL)
	{
		$news_item = $this->news_model->get_news($slug);

		if (empty($news_item)){
            return show_404();
        }

        $data['news_item'] = $news_item;
        $data['title'] = $news_item->title;

        $this->blade->view('news.news_item', $data);
	}

	public function create()
	{
		$this->load->helper('form');
	    $this->load->library('form_validation');

	    $data['title'] = 'Create a news item';

	    $this->form_validation->set_rules('title', 'Title', 'required');
	    $this->form_validation->set_rules('text', 'Text', 'required');

	    if ($this->form_validation->run() === FALSE){
			$this->blade->view('news.add_news', $data);
	    } else{
	        $this->news_model->set_news();
	        $this->blade->view('news.success');
	    }
	}
}
