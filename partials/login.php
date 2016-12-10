

<?php
require ('config.php');

if($_SERVER['REQUEST_METHOD']=="POST"){
			
			$uname=strip_tags(stripslashes($_POST['uname']));
			$pword=md5(strip_tags(stripslashes($_POST['pword'])));
			
			$sql = "SELECT * FROM account WHERE acc_user LIKE '".$uname."' AND acc_pass LIKE '".$pword."'";

			$result=mysqli_fetch_array(request($sql));		
			
			if(count($result)>0){
				$_SESSION['user']=$result['acc_user'];
				$_SESSION['id']=$result['acc_id'];
				$_SESSION['ulevel']=$result['acc_type'];
				$url='localhost/bgs';

				if(isSet($_SESSION['ulevel']) && $_SESSION['ulevel'] == 1){header("Location: http://". $url ."/partials/index.php");} 

				else if(isSet($_SESSION['ulevel']) && $_SESSION['ulevel'] == 2){header("Location: http://". $url ."/partials/index.php");}
			}
			else {
				echo '<script>alert("Wrong Credentials Provided");</script>';
			}
		}

?>
<?php 

if (!isSet($_SESSION['ulevel'])){

?>
<html>
	<head>
		<title>Employee Login</title>
		<meta name="viewport" content="width=device-width,initial-scale=1.0" />
		<link href="../css/bootstrap.min.css" rel="stylesheet" />
		<link href="../css/bootstrap-theme.css" rel="stylesheet" />
		<script src="../js/bootstrap.min.js"></script>
		<script src="../js/jquery.js"></script>
	</head>
	<body>
		<div class="container">
			<div class="row Content">
				<div class="col-md-12">
					<h3 class="text-center">User Login</h3>
					<form method="POST" action="#" role="form">
					  <div class="form-group">
						<label for="email">Username</label>
						<input type="text" class="form-control" id="uname" name="uname">
					  </div>
					  <div class="form-group">
						<label for="pword">Password:</label>
						<input type="password" class="form-control" id="pword" name="pword">
					  </div>
					  <div class="container">
						<div class="row">
							<div><button type="submit" class="btn btn-success" id="Ipasa">Submit</button></div>
							<div class="col-md-5 col-centered"></div>
						</div>
					</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>
<?php } ?>