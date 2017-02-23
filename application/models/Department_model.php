<?php

class Department_model extends CI_Model{

    //public $department_id;
    public $department_name;

	public function __construct(){
		parent::__construct();
	}

	public function getDepartments(){
		$this->db->select('department_id,department_name');
		$checkLoginQuery = $this->db->get_where('department', array('1' => "1"));

		$resultNum = $checkLoginQuery->num_rows();

		if($resultNum >= 1){
			return array("Success",$checkLoginQuery);
		}
		else{
			return array("Fail");
		}
	}

	public function getDepartmentById($deptId){
		$this->db->select('department_id,department_name');
		$checkLoginQuery = $this->db->get_where('department', array('department_id' => $deptId));

		$resultNum = $checkLoginQuery->num_rows();

		if($resultNum >= 1){
			return array("Success",$checkLoginQuery);
		}
		else{
			return array("Fail");
		}
	}

	public function getDepartmentByName($deptName){
		$this->db->select('department_id,department_name');
		$checkLoginQuery = $this->db->get_where('department', array('department_name' => $deptName));

		$resultNum = $checkLoginQuery->num_rows();

		if($resultNum >= 1){
			return array("Success",$checkLoginQuery);
		}
		else{
			return array("Fail");
		}
	}

    public function insertNewDepartment($name){
            $this->department_name  = $name;
            $this->db->insert('department', $this);
    }

    public function updateDepartment($id,$name){
            $this->department_name  = $name;
            $this->db->update('department', $this, array('department_id' => $id));
    }

    public function deleteDepartment($id){
            $this->db->delete('department', $this, array('department_id' => $id));
    }
}


?>