<?php
$labels	=	array('Date','Amount','CTC no','Last Name','First Name','Middle Name','Birthplace','Gender','Age','Civil Status','Length of stay(years)','Length of stay(months)','Birthday','Father','Mother','Barangay','Street','House No','Cellphone No','Telephone No','Purpose');
$dataName	=	array('c_date','c_amount','c_ctc_no','c_l_name','c_f_name','c_m_name','c_birthplace','c_gender','c_age','c_civil_status','c_length_of_stay_years','c_length_of_stay_months','c_birthday','c_father','c_mother','c_barangay','c_street','c_house_no','c_cellphone_no','c_telephone_no','c_purpose');
$dataType	=	array('datenowd','number','number','text','text','text','text','sex','number','civilstatus','number','number','c_birthday','text','text','text','text','text','text','text','text');

if(isset($_POST['acc_user'])&&isset($_POST['acc_pass'])){//submit
	require_once('config.php');
	if(!isset($_POST['info_may_trabaho'])){
		$_POST['info_may_trabaho']=0;
	}
	$check = request("SELECT count(`acc_user`) FROM `account` WHERE `acc_user`='".esc($_POST['acc_user'])."'");
	$chk=mysqli_fetch_array($check);
	if($chk[0]==0){
		$result = request("INSERT INTO `account`(`acc_user`,`acc_pass`,`info_name`,`info_address`,`info_citizenship`,`info_sex`,`info_civil_status`,`info_birthdate`,`info_birthplace`,`info_height`,`info_weight`,`info_may_trabaho`,`info_trabaho`,`info_sahod`,`info_tin_no`,`info_contact_no`,`info_contact_person`,`info_contact_person_no`) VALUES ('".esc($_POST['acc_user'])."','".md5($_POST['acc_pass'])."','".esc($_POST['info_name'])."','".esc($_POST['info_address'])."','".esc($_POST['info_citizenship'])."','".esc($_POST['info_sex'])."','".esc($_POST['info_civil_status'])."','".esc($_POST['info_birthdate'])."','".esc($_POST['info_birthplace'])."','".esc($_POST['info_height'])."','".esc($_POST['info_weight'])."','".esc($_POST['info_may_trabaho'])."','".esc($_POST['info_trabaho'])."','".esc($_POST['info_sahod'])."','".esc($_POST['info_tin_no'])."','".esc($_POST['info_contact_no'])."','".esc($_POST['info_contact_person'])."','".esc($_POST['info_contact_person_no'])."')");
		if($result){
		echo '
			<div class="alert alert-success">
			<strong><span class="glyphicon glyphicon-ok"></span> Success! You have been registered.</strong>
			</div>';
		}else{
			echo '
			<div class="alert alert-danger">
				<span class="glyphicon glyphicon-remove"></span><strong> Error! There was an unexpedted problem.</strong>
			</div>';
		}
	}else{
		echo '
		<div class="alert alert-danger">
			<span class="glyphicon glyphicon-remove"></span><strong> Error! Username already in use.</strong>
		</div>';
	}
}
require_once('suform.php');
?>