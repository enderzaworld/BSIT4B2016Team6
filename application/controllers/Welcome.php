<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->view('default');
	}

	public function login(){
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('account');
		$this->account->login_validation();
	}

	public function logout(){
		$this->load->helper('url');
		$this->load->library('session');
		$this->session->sess_destroy();
		$this->load->library('session');
		redirect(base_url(), 'location');
	}
	public function message(){
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->view('folder/message.php');
	}

	public function partials(){
		$this->load->helper('url');
		$this->load->view('default');
	}
}
