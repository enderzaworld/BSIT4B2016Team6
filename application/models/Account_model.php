<?php

class Account_model extends CI_Model{
	public function __construct(){
		parent::__construct();
	}

	public function Login_check_($uname, $upass){
		$this->db->select('Email_Address,Password,user_id, Last_Name');
		$checkLoginQuery = $this->db->get_where('users', array('Email_Address' => $uname, 'Password' => $upass));

		$resultNum = $checkLoginQuery->num_rows();

		if($resultNum >= 1){
			return array("Success",$checkLoginQuery->row(2)->user_id,$checkLoginQuery->row(0)->Email_Address,$checkLoginQuery->row(3)->Last_Name);
		}
		else{
			return array("Fail");
		}
	}

	public function check_email_login(){
		$email = $this->input->post('emailID', TRUE);

		$emailCheckQuery = $this->db->query("SELECT Email_Address FROM users WHERE Email_Address LIKE '".$this->db->escape_str($email)."'");

		$rowCount = $emailCheckQuery->num_rows();

		if($rowCount > 0){
			echo "0"; //Email REGISTERED
		}
		else{
			echo "1"; //Email NOT REGISTERED
		}
	}
}


?>