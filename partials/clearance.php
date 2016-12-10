<?php
$labels	=	array('Date','Amount','CTC no','Last Name','First Name','Middle Name','Birthplace','Gender','Age','Civil Status','Length of stay(years)','Length of stay(months)','Birthday','Father','Mother','Barangay','Street','House No','Cellphone No','Telephone No','Purpose');
$dataName	=	array('c_date','c_amount','c_ctc_no','c_l_name','c_f_name','c_m_name','c_birthplace','c_gender','c_age','c_civil_status','c_length_of_stay_years','c_length_of_stay_months','c_birthday','c_father','c_mother','c_barangay','c_street','c_house_no','c_cellphone_no','c_telephone_no','c_purpose');
$dataType	=	array('datenowd','number','number','text','text','text','text','sex','number','civilstatus','number','number','c_birthday','text','text','text','text','text','text','text','text');

if(isset($_POST[$dataName[0]])){//submit
	require_once('config.php');
		$sql="INSERT INTO `clearance`(";
		foreach($dataName as $key => $data){
			$sql.="`".$data."`";
			if($key<count($dataName)-1){
				$sql.=",";
			}
		}
		$sql.=") VALUES (";
			$sql.="'".esc($_POST[$data])."'";
			if($key<count($dataName)-1){
				$sql.=",";
			}
		$sql.=")";
		$result = request($sql);
		if($result){
		echo '
			<div class="alert alert-success">
			<strong><span class="glyphicon glyphicon-ok"></span> Success! You have applied for baranggay clearance.</strong>
			</div>';
		}else{
			echo '
			<div class="alert alert-danger">
				<span class="glyphicon glyphicon-remove"></span><strong> Error! There was an unexpedted problem.</strong>
			</div>';
		}
}
?>
<h3>Baranggay Clearance</h3>
<?php
require_once('suform.php');
?>