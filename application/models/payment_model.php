<?php 

class Payment_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function getData()
	{
		$query = $this->db->get('data', 5);

		return $query->result();
	}

}
