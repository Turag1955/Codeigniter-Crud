<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

	public function index()
	{	
		$email = $this->input->post('email',true);
		$password = $this->input->post('password',true);
		$this->load->model('login');
		$result = $this->login->index($email,$password);
		if($result){
			$data['content'] = $this->load->view('page/dashboard/index','',true);
			$this->load->view('dashboard',$data);
		}else{
			echo 'invalid information ';
		}
	
	}


}
