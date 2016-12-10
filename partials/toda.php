<?php
$labels	=	array('s_date','s_name','s_tel_no','s_address','s_religion','s_date_of_birth','s_place_of_birth','s_age','s_sex','s_civil_status','s_occupation','s_spouse_name','s_spouse_occupation','s_name_of_drivers/address/drivers_sidecar','s_body_no_for_tru','s_plate_no','s_muffler','s_headlight','s_signal_light','s_trash_can','s_inspector_name','s_inspection_datetime','s_ctc_no','s_place_of_issue','s_issued_on'
);
$dataName	=	array('s_date','s_name','s_tel_no','s_address','s_religion','s_date_of_birth','s_place_of_birth','s_age','s_sex','s_civil_status','s_occupation','s_spouse_name','s_spouse_occupation','s_name_of_drivers/address/drivers_sidecar','s_body_no_for_tru','s_plate_no','s_muffler','s_headlight','s_signal_light','s_trash_can','s_inspector_name','s_inspection_datetime','s_ctc_no','s_place_of_issue','s_issued_on'
);
$dataType	=	array('datenowd','text','text','text','text','date','text','number','sex','civilstatus','text','text','text','text','text','text','checkbox','checkbox','checkbox','checkbox','text','datetime','number','text','date'
);

if(isset($_POST[$dataName[0]])){//submit
	require_once('config.php');
		$sql="INSERT INTO `sotoda`(";
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
			<strong><span class="glyphicon glyphicon-ok"></span> Success! You have applied for sotoda.</strong>
			</div>';
		}else{
			echo '
			<div class="alert alert-danger">
				<span class="glyphicon glyphicon-remove"></span><strong> Error! There was an unexpedted problem.</strong>
			</div>';
		}
}
?>
<h3>Sotoda</h3>
<?php
require_once('suform.php');
?>