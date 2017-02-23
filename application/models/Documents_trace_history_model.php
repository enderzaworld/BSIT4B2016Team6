<?php

class Documents_trace_history_model extends CI_Model{

    //public $document_trace_id;
    public $department_id;
    public $user_id;
    public $document_trace_date;
    public $document_id;

	public function __construct(){
		parent::__construct();

		$this->$document_trace_date='CURRENT_TIMESTAMP';
	}

	public function esc($str){
		return $this->db->escape_str($str);
	}

	public function getDocumentTraceHistory(){
		$this->db->select('document_trace_id,department_id,user_id,document_trace_date,document_id');
		$queryResult = $this->db->get_where('documents_trace_history', array('1' => "1"));

		$resultNum = $queryResult->num_rows();

		if($resultNum >= 1){
			return array("Success",$queryResult);
		}
		else{
			return array("Fail");
		}
	}

	public function getDocumentTraceHistoryById($docTracId){
		$this->db->select('document_trace_id,department_id,user_id,document_trace_date,document_id');
		$queryResult = $this->db->get_where('documents_trace_history', array('document_trace_id' => $docTracId));

		$resultNum = $queryResult->num_rows();

		if($resultNum >= 1){
			return array("Success",$queryResult);
		}
		else{
			return array("Fail");
		}
	}

	public function getDocumentTraceHistoryByDocId($docId){
		$this->db->select('document_trace_id,department_id,user_id,document_trace_date,document_id');
		$queryResult = $this->db->get_where('documents_trace_history', array('document_id' => $docId));

		$resultNum = $queryResult->num_rows();

		if($resultNum >= 1){
			return array("Success",$queryResult);
		}
		else{
			return array("Fail");
		}
	}

	public function getDocumentTraceHistoryByDeptId($deptId){
		$this->db->select('document_trace_id,department_id,user_id,document_trace_date,document_id');
		$queryResult = $this->db->get_where('documents_trace_history', array('document_id' => $deptId));

		$resultNum = $queryResult->num_rows();

		if($resultNum >= 1){
			return array("Success",$queryResult);
		}
		else{
			return array("Fail");
		}
	}

	public function getDocumentTraceHistoryByUserId($userId){
		$this->db->select('document_trace_id,department_id,user_id,document_trace_date,document_id');
		$queryResult = $this->db->get_where('documents_trace_history', array('user_id' => $userId));

		$resultNum = $queryResult->num_rows();

		if($resultNum >= 1){
			return array("Success",$queryResult);
		}
		else{
			return array("Fail");
		}
	}

	public function getDocumentsTraceHistoryByDate($docDate){
		$this->db->select('document_trace_id,department_id,user_id,document_trace_date,document_id');
		$queryResult = $this->db->get_where('documents_trace_history', array('document_trace_date' => $docDate));

		$resultNum = $queryResult->num_rows();

		if($resultNum >= 1){
			return array("Success",$queryResult);
		}
		else{
			return array("Fail");
		}
	}

	public function getDocumentsTraceHistoryByArray($array){//date1,date2
		if(isset($array['date1'])&&isset($array['date2'])){
			$date1 = $this->esc($array['date1']);
			$date2 = $this->esc($array['date2']);
			unset($array['date1']);
			unset($array['date2']);
		}

		$this->db->select('document_trace_id,department_id,user_id,document_trace_date,document_id');
		$queryResult = $this->db->get_where('documents_trace_history', $array);

		if(isset($date1)&&isset($date2)){
			$queryResult = $this->db->where("`document_trace_date` BETWEEN ".$date1." AND ".$date2." ");
		}

		$resultNum = $queryResult->num_rows();

		if($resultNum >= 1){
			return array("Success",$queryResult);
		}
		else{
			return array("Fail");
		}
	}

	public function getDocumentsTraceHistoryBetweenDates($docDate1,$docDate2){
		$docDate1 = $this->esc($docDate1);
		$docDate2 = $this->esc($docDate2);
		$this->db->select('document_trace_id,department_id,user_id,document_trace_date,document_id');
		$queryResult = $this->db->get_where('documents_trace_history', "`document_trace_date` BETWEEN ".$docDate1." AND ".$docDate2." ");

		$resultNum = $queryResult->num_rows();

		if($resultNum >= 1){
			return array("Success",$queryResult);
		}
		else{
			return array("Fail");
		}
	}


    public function insertNewRemark($deptId,$docId,$user_id=0,$date='CURRENT_TIMESTAMP'){
    		$this->$department_id 		= $deptId;
    		$this->$document_id 		= $docId;
    		$this->$user_id 			= $user_id;
    		$this->$document_trace_date = $date;

            $this->db->insert('documents_trace_history', $this);
    }

    public function updateRemark($id,$deptId,$docId,$user_id=0,$date='CURRENT_TIMESTAMP'){
    		$this->$department_id 		= $deptId;
    		$this->$document_id 		= $docId;
    		$this->$user_id 			= $user_id;
    		$this->$document_trace_date = $date;
    		
            $this->db->update('documents_trace_history', $this, array('document_trace_id' => $id));
    }

    public function deleteRemark($id){
            $this->db->delete('documents_trace_history', array('document_trace_id' => $id));
    }
}


?>