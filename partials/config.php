<?php
/* config file */
$host = "localhost";
$user = "root";
$pass = "";
$db = "baranggay";

function connect_data(){
global $host,$user,$pass,$db;
//connect and select
$conn = mysqli_connect($host,$user,$pass,$db);

//check
	if( mysqli_connect_errno($conn) ){
		echo "Error in DB";
	}else{
		// echo "OK";
	}
return $conn;
}

function esc($str){
	$conn = connect_data();
	if(mysqli_connect_errno($conn)){
		//echo 'Database error';
		return $str;
	}
	return mysqli_escape_string($conn,$str);
}

function request($sql){
	$conn = connect_data();
	return mysqli_query($conn,$sql);
}

?>