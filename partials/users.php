<?php
$labels	=	array('Username','Password','Full Name','Address','Citizenship','Sex','Civil Status','Birthdate','Birthplace','Height','Weight','May Trabaho','Trabaho','Sahod','Tin No.','Contact no','Contact Person',"Contact Person's no.");
$dataName	=	array('acc_user','acc_pass','info_name','info_address','info_citizenship','info_sex','info_civil_status','info_birthdate','info_birthplace','info_height','info_weight','info_may_trabaho','info_trabaho','info_sahod','info_tin_no','info_contact_no','info_contact_person','info_contact_person_no');
$dataType	=	array('text','password','text','text','text','sex','civilstatus','date','text','number','number','checkbox','text','number','number','text','text','text');

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
?>
<h3>Register</h3>
<?php
require_once('suform.php');
?>