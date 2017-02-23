<?php

class Documents_model extends CI_Model{

    //public $document_id;
    public $document_name;
    public $document_date;

	public function __construct(){
		parent::__construct();

		$this->$document_date='CURRENT_TIMESTAMP';
	}

	public function esc($str){
		return $this->db->escape_str($str);
	}

	public function getDocuments(){
		$this->db->select('document_id,document_name,document_date');
		$queryResult = $this->db->get_where('documents', array('1' => "1"));

		$resultNum = $queryResult->num_rows();

		if($resultNum >= 1){
			return array("Success",$queryResult);
		}
		else{
			return array("Fail");
		}
	}

	public function getDocumentById($docId){
		$this->db->select('document_id,document_name,document_date');
		$queryResult = $this->db->get_where('department', array('document_id' => $docId));

		$resultNum = $queryResult->num_rows();

		if($resultNum >= 1){
			return array("Success",$queryResult);
		}
		else{
			return array("Fail");
		}
	}

	public function getDocumentByName($docName){
		$this->db->select('document_id,document_name,document_date');
		$queryResult = $this->db->get_where('documents', array('document_name' => $docName));

		$resultNum = $queryResult->num_rows();

		if($resultNum >= 1){
			return array("Success",$queryResult);
		}
		else{
			return array("Fail");
		}
	}

	public function getDocumentsByDate($docDate){
		$this->db->select('document_id,document_name,document_date');
		$queryResult = $this->db->get_where('documents', array('document_date' => $docDate));

		$resultNum = $queryResult->num_rows();

		if($resultNum >= 1){
			return array("Success",$queryResult);
		}
		else{
			return array("Fail");
		}
	}

	public function getDocumentsByArray($array){//date1,date2
		if(isset($array['date1'])&&isset($array['date2'])){
			$date1 = $this->esc($array['date1']);
			$date2 = $this->esc($array['date2']);
			unset($array['date1']);
			unset($array['date2']);
		}

		$this->db->select('document_id,document_name,document_date');
		$queryResult = $this->db->get_where('documents', $array);

		if(isset($date1)&&isset($date2)){
			$queryResult = $this->db->where("`document_date` BETWEEN ".$date1." AND ".$date2." ");
		}

		$resultNum = $queryResult->num_rows();

		if($resultNum >= 1){
			return array("Success",$queryResult);
		}
		else{
			return array("Fail");
		}
	}

	public function getDocumentsBetweenDates($docDate1,$docDate2){
		$docDate1 = $this->esc($docDate1);
		$docDate2 = $this->esc($docDate2);
		$this->db->select('document_id,document_name,document_date');
		$queryResult = $this->db->get_where('documents', "`document_date` BETWEEN ".$docDate1." AND ".$docDate2." ");

		$resultNum = $queryResult->num_rows();

		if($resultNum >= 1){
			return array("Success",$queryResult);
		}
		else{
			return array("Fail");
		}
	}

    public function insertNewDocument($name,$date='CURRENT_TIMESTAMP'){
            $this->document_name  = $name;
            $this->document_date  = $date;
            $this->db->insert('documents', $this);
    }

    public function updateDocument($id,$name,$date='CURRENT_TIMESTAMP'){
            $this->document_name  = $name;
            $this->document_date  = $date;
            $this->db->update('documents', $this, array('document_id' => $id));
    }

    public function deleteDocument($id){
            $this->db->delete('documents', array('document_id' => $id));
    }
}


?>