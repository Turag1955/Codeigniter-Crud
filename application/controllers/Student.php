<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {

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
	public function index()
	{	
		$data['content'] = $this->load->view('page/student/index','',true);
		$this->load->view('dashboard',$data);
	}

	public function create()
	{	
		$data['content'] = $this->load->view('page/student/create','',true);
		$this->load->view('dashboard',$data);
	}
	// public function store(Request $request)
	// {	
	// 	$data['content'] = $this->load->view('page/student/create','',true);
	// 	$this->load->view('dashboard',$data);
	// }

}
