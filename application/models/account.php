<?php

class account extends CI_Model{

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function add_user(){
		$uname=$this->input->post('uname');
		$upass=$this->input->post('upass');

		$this->db->query('INSERT into account(username,password) VALUES("'.$uname.'", "'.$upass.'")');
	}

	public function esc($string){
		return $this->db->escape($string);
	}

	public function delayedRedirect($message,$redirectStr,$time=5){
	    $this->session->set_flashdata('message_id', $message);//message rendered
	    $this->session->set_flashdata('seconds_redirect', $time);//time to be redirected (in seconds)
	    $this->session->set_flashdata('url_redirect', $redirectStr);//url to be redirected       base_url('controller/method')

	    redirect('folder/message', 'refresh');
	}

	public function login_validation(){
		if(!isset($_SESSION['id'])){
			/*if ($this->form_validation->run() == FALSE) {
				if(isset($this->session->userdata['logged_in'])){
					$this->load->view('admin_page');
				}else{
					$this->load->view('login_form');
				}
			} */
			$user=$this->input->post('user');
			$passw=$this->input->post('passw');

			$sql="SELECT `user_id`,`user_name` FROM `users` WHERE `user_name` LIKE ".$this->esc($user).
				" AND `user_password` like ".$this->esc($passw)." ";
				/*$result = mysqli_query($conn,$sql);*/
				$query = $this->db->query($sql);
				if($res=$query->row()){
						$_SESSION['id']=$res->user_id;
						$_SESSION['user']=$res->user_name;
						echo'redirecting....
						<script type="text/javascript">
						<!--
							window.location="'.base_url().'";
						//-->
						</script>';
				}else{
					$this->delayedRedirect("Wrong user name and/or password<br />Redirecting....",base_url()."#account/login");
					echo'redirecting....
						<script type="text/javascript">
						<!--
							window.onload = function () {
								alert("Wrong user name and/or password");
								window.location="'.base_url().'";
							}
						//-->
						</script>';
				}
		}else{
				$this->delayedRedirect("Already have session<br />Redirecting....",base_url());
			echo'redirecting....
				<script type="text/javascript">
				<!--
					window.onload = function () {
						alert("Already have session");
						window.location="'.base_url().'";
					}
				//-->
				</script>';
		}
	}
}

?>