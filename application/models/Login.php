<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Model {

	function __construct() {
		parent::__construct();
		$this->load->database();
	}
	public function index($email,$password)
	{	
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('email',$email);
		$this->db->where('password',$password);
		$query = $this->db->get();
		$result = $query->row();
		return $result;
	}


}
