<?php

class Documents_remarks_model extends CI_Model{

    //public $document_remarks_id;
    public $document_id;
    public $document_remark_text;
    public $user_id;
    public $document_remark_timestamp;

	public function __construct(){
		parent::__construct();

		$this->$document_remark_timestamp='CURRENT_TIMESTAMP';
	}

	public function esc($str){
		return $this->db->escape_str($str);
	}

	public function getDocumentRemarks(){
		$this->db->select('document_remarks_id,document_id,document_remark_text,user_id,document_remark_timestamp');
		$queryResult = $this->db->get_where('documents_remarks', array('1' => "1"));

		$resultNum = $queryResult->num_rows();

		if($resultNum >= 1){
			return array("Success",$queryResult);
		}
		else{
			return array("Fail");
		}
	}

	public function getDocumentRemarkById($docRemId){
		$this->db->select('document_remarks_id,document_id,document_remark_text,user_id,document_remark_timestamp');
		$queryResult = $this->db->get_where('documents_remarks', array('document_remarks_id' => $docRemId));

		$resultNum = $queryResult->num_rows();

		if($resultNum >= 1){
			return array("Success",$queryResult);
		}
		else{
			return array("Fail");
		}
	}

	public function getDocumentRemarksByDocId($docId){
		$this->db->select('document_remarks_id,document_id,document_remark_text,user_id,document_remark_timestamp');
		$queryResult = $this->db->get_where('documents_remarks', array('document_id' => $docId));

		$resultNum = $queryResult->num_rows();

		if($resultNum >= 1){
			return array("Success",$queryResult);
		}
		else{
			return array("Fail");
		}
	}

	public function getDocumentRemarksByText($text){
		$text = $this->esc($text);
		$this->db->select('document_remarks_id,document_id,document_remark_text,user_id,document_remark_timestamp');
		$queryResult = $this->db->get_where('documents_remarks', "`document_remark_text` LIKE '%".$text."%'");

		$resultNum = $queryResult->num_rows();

		if($resultNum >= 1){
			return array("Success",$queryResult);
		}
		else{
			return array("Fail");
		}
	}

	public function getDocumentRemarksByUserId($userId){
		$this->db->select('document_remarks_id,document_id,document_remark_text,user_id,document_remark_timestamp');
		$queryResult = $this->db->get_where('documents_remarks', array('user_id' => $userId));

		$resultNum = $queryResult->num_rows();

		if($resultNum >= 1){
			return array("Success",$queryResult);
		}
		else{
			return array("Fail");
		}
	}

	public function getDocumentsRemarksByDate($docDate){
		$this->db->select('document_remarks_id,document_id,document_remark_text,user_id,document_remark_timestamp');
		$queryResult = $this->db->get_where('documents_remarks', array('document_remark_timestamp' => $docDate));

		$resultNum = $queryResult->num_rows();

		if($resultNum >= 1){
			return array("Success",$queryResult);
		}
		else{
			return array("Fail");
		}
	}

	public function getDocumentsRemarksByArray($array){//date1,date2
		if(isset($array['date1'])&&isset($array['date2'])){
			$date1 = $this->esc($array['date1']);
			$date2 = $this->esc($array['date2']);
			unset($array['date1']);
			unset($array['date2']);
		}

		$this->db->select('document_remarks_id,document_id,document_remark_text,user_id,document_remark_timestamp');
		$queryResult = $this->db->get_where('documents_remarks', $array);

		if(isset($date1)&&isset($date2)){
			$queryResult = $this->db->where("`document_remark_timestamp` BETWEEN ".$date1." AND ".$date2." ");
		}

		$resultNum = $queryResult->num_rows();

		if($resultNum >= 1){
			return array("Success",$queryResult);
		}
		else{
			return array("Fail");
		}
	}

	public function getDocumentsRemarksBetweenDates($docDate1,$docDate2){
		$docDate1 = $this->esc($docDate1);
		$docDate2 = $this->esc($docDate2);
		$this->db->select('document_remarks_id,document_id,document_remark_text,user_id,document_remark_timestamp');
		$queryResult = $this->db->get_where('documents_remarks', "`document_remark_timestamp` BETWEEN ".$docDate1." AND ".$docDate2." ");

		$resultNum = $queryResult->num_rows();

		if($resultNum >= 1){
			return array("Success",$queryResult);
		}
		else{
			return array("Fail");
		}
	}

    public function insertNewRemark($docId,$text,$user_id=0,$date='CURRENT_TIMESTAMP'){
    		$this->$document_id 				= $docId;
    		$this->$document_remark_text 		= $text;
    		$this->$user_id 					= $user_id;
    		$this->$document_remark_timestamp 	= $date;

            $this->db->insert('documents_remarks', $this);
    }

    public function updateRemark($id,$docId,$text,$user_id=0,$date='CURRENT_TIMESTAMP'){
    		$this->$document_id 				= $docId;
    		$this->$document_remark_text 		= $text;
    		$this->$user_id 					= $user_id;
    		$this->$document_remark_timestamp 	= $date;
    		
            $this->db->update('documents_remarks', $this, array('document_remarks_id' => $id));
    }

    public function deleteRemark($id){
            $this->db->delete('documents_remarks', array('document_remarks_id' => $id));
    }
}


?>