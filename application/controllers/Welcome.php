<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');

	}



	public function index()
	{
		$this->load->view('admin/login');
	}



	public function login()
	{
		$data=$this->session->userdata();
		$user_id=$this->session->userdata('user_id');
		$user_type=$this->session->userdata('user_role');
		if($user_type=="1"){
			redirect('home/dashboard');
		}else{
				$this->load->view('admin/login');
		}


	}




	public function forgotpassword()
	{

		$this->load->view('admin/forgot_password.php');

	}



}
