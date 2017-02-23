<?php

class Employee extends CI_Controller{
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$data['empHome'] = "Home";

		$this->load->view('masterView', $data);
	}

	public function logout(){
		$this->session->sess_destroy();
		$this->session->unset_userdata('user_id');
		$this->session->unset_userdata('user_address');
		$this->session->unset_userdata('Last_Name');

		redirect('Login');
	}
}

?>