<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function view($page="index")
	{
		if ( ! file_exists(APPPATH.'views/pages/'.$page.'.blade.php'))
        {
            // Whoops, we don't have a page for that!
            show_404();
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        $this->blade->view('pages.'.$page, $data);
	}
}
