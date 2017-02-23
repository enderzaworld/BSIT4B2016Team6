<?php

class Login extends CI_Controller{

	public function __construct(){
		parent::__construct();
		
		$this->load->model('Account_model');
	}

	public function index(){
		if($this->session->userdata('user_id')){
			redirect('Employee');
		}else{
			$data['userLogin'] = 'Login';

		$this->load->view('masterView', $data);	
		}
		
	}

	public function esc($string){
		return $this->db->escape($string);
	}

	public function login_check_(){
		$config = array(
			array(
				'field' =>'uName',
				'label' =>'Username',
				'rules' =>'required|min_length[5]'
				),
			array(
				'field' =>'uPass',
				'label' =>'Password',
				'rules' =>'required|min_length[5]'
				)
			);

		$this->form_validation->set_rules($config);

		if($this->form_validation->run() == FALSE){
			$data = array(

				'error' => validation_errors()

				);

			$this->session->set_flashdata($data);

			redirect('Login');
		}else{
			$username = $this->input->post('uName', TRUE);
			$password = $this->input->post('uPass', TRUE);

			$user_id = $this->Account_model->Login_check_($username,$password);

			if($user_id[0] == "Success"){
				$userdata = array(
					'user_id' => $user_id[1],
					'user_address' => $user_id[2],
					'Last_Name' => $user_id[3]
					);

				$this->session->set_userdata($userdata);

				redirect('Employee');

			}else if($user_id[0] == "Fail"){
				$this->session->set_flashdata('login_failed', 'Wrong credentials provided!');

				redirect('Login');
			}
		}	
	}

	public function check_user_login(){
		$this->Account_model->check_user_login();
	}
}

?>