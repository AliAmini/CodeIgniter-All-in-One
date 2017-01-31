<?php 

class News_model extends CI_Model {

	public function get_news($slug = false)
	{
		if ($slug === false){
			$query = $this->db->get('news');
			return $query->result();
		}

		$query = $this->db->get_where('news', array('slug' => $slug));
		return $query->row();
	}


	public function set_news()
	{
	    $this->load->helper('url');

	    $slug = url_title($this->input->post('title'), 'dash', TRUE);

	    $data = array(
	        'title' => $this->input->post('title'),
	        'slug' => $slug,
	        'text' => $this->input->post('text')
	    );

	    return $this->db->insert('news', $data);
	}

}
