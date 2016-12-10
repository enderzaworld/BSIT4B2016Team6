<?php
$labels	=	array('Date','Last Name','First Name','Middle Name','Civil Status','Gender','Age','(Maglalakad ng dokumento) Last Name','(Maglalakad ng dokumento) Middle Name','Barangay','Street','House no','Cellphone no','Length Of Stay(years)','Length Of Stay(Months)','Purpose'
);
$dataName	=	array('i_date','i_l_name','i_f_name','i_m_name','i_civil_status','i_gender','i_age','i_ml_name','i_mm_name','i_barangay','i_street','i_house_no','i_cellphone_no','i_length_of_stay_years','i_length_of_stay_months','i_purpose'
);
$dataType	=	array('datenowd','text','text','text','civilstatus','sex','number','text','text','text','text','text','text','number','number','text'
);

if(isset($_POST[$dataName[0]])){//submit
	require_once('config.php');
		$sql="INSERT INTO `indigency`(";
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
			<strong><span class="glyphicon glyphicon-ok"></span> Success! You have applied for indigency.</strong>
			</div>';
		}else{
			echo '
			<div class="alert alert-danger">
				<span class="glyphicon glyphicon-remove"></span><strong> Error! There was an unexpedted problem.</strong>
			</div>';
		}
}
?>
<h3>Indigency</h3>
<?php
require_once('suform.php');
?>