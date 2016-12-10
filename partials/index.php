<?php
if(isset($_GET['logout'])){
session_start();
session_destroy();
header('Location:./');
}
require_once("start.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" href="BS/css/bootstrap.min.css" >
	<link rel="stylesheet" href="TR/css/tether.min.css" >
	<script src="JQ/jquery-3.1.1.min.js" ></script>
	<script src="TR/js/tether.min.js" ></script>
	<script src="BS/js/bootstrap.js" ></script>
</head>
<body>

<!-- navbar -->
<nav class="navbar navbar-light bg-faded navbar-fixed-top">
    <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar2">
    &#9776;
    </button>
    <div class="collapse navbar-toggleable-xs" id="exCollapsingNavbar2">
        <a class="navbar-brand" href="#">Barangay na bar</a>
        <ul class="nav navbar-nav">
            <li class="nav-item">
                <a href="./" class="nav-link">bahay</a>
            </li>
		<?php if(isset($_SESSION['Us'])&&$_SESSION['Us']==1){ ?>
            <li class="nav-item btn-group">
                <a class="dropdown-toggle nav-link btn btn-secondary" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Apply
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <a class="dropdown-item" href="?appForm=Barangay%20Clearance">Barangay Clearance</a>
                    <a class="dropdown-item" href="?appForm=Indigency">Indigency</a>
                    <a class="dropdown-item" href="?appForm=TODA">TODA</a>
                </div>
            </li>
		<?php } ?>
		<?php if(isset($_SESSION['Ad'])&&$_SESSION['Ad']==1){ ?>
            <li class="nav-item btn-group">
                <a class="dropdown-toggle nav-link btn btn-secondary" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Admin Control
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <a class="dropdown-item" href="?appView=Users">Users</a>
                    <a class="dropdown-item" href="?appView=Barangay Clearance">Barangay Clearance</a>
                    <a class="dropdown-item" href="?appView=Indigency">Indigency</a>
                    <a class="dropdown-item" href="?appView=TODA">TODA</a>
                </div>
            </li>
		<?php } ?>
        </ul>
        <ul class="nav navbar-nav float-xs-right">
		<?php if(!isset($_SESSION['id'])){ ?>
			<li class="nav-item">
				<a href="?login" class="nav-link">login</a>
			</li>
		<?php }else{ ?>
			<li class="nav-item">
				<?php echo $_SESSION['user'];?>
			</li>
			<li class="nav-item">
				<a href="?logout" class="nav-link">logout</a>
			</li>
		<?php } ?>
        </ul>
		<!--
        <form class="form-inline navbar-form pull-right">
            <input class="form-control" type="text" placeholder="Search">
        </form> -->
    </div>
</nav>

<!-- navbar -->
	<br />
	<br />
	<br />
	<div class="container">
<?php
function makeBtns(){
	if(isset($_SESSION['Us'])&&$_SESSION['Us']==1){
	?>
		<div class="col-sm-1"></div>
		<div class="col-sm-10">
			<h3>Welcome, you may now apply for the following:</h3>
			<a class="dropdown-item" href="?appForm=Barangay Clearance"><button class="btn btn-primary col-xs-12">Barangay Clearance</button></a>
			<a class="dropdown-item" href="?appForm=Indigency"><button class="btn btn-primary col-xs-12">Indigency</button></a>
			<a class="dropdown-item" href="?appForm=TODA"><button class="btn btn-primary col-xs-12">TODA</button></a>
		</div>
		<div class="col-sm-1"></div>
<?php
	}else if(!isset($_SESSION['Ad'])||isset($_SESSION['Ad'])&&$_SESSION['Ad']!=1){
	?>
		<div class="col-sm-1"></div>
		<div class="col-sm-10">
			<h3>Welcome, you must register to proceed</h3>
			<a class="dropdown-item" href="?appForm=Users"><button class="btn btn-primary col-xs-12">Register</button></a>
		</div>
		<div class="col-sm-1"></div>
<?php
	}
}
if(isset($_GET['login'])){
	require_once("login.php");
}else
if(isset($_GET['appView'])){
	switch($_GET['appView']){
		case "Users": 
			if(isset($_SESSION['Ad'])&&$_SESSION['Ad']==1){
				
			}
			break;
		case "Barangay Clearance": break;
		default: makeBtns();
	}
}else
if(isset($_GET['appForm'])){
	switch($_GET['appForm']){
		case "Users": require_once("users.php"); break;
		case "Barangay Clearance": require_once("clearance.php"); break;
		case "Indigency": require_once("indigency.php"); break;
		case "TODA": require_once("toda.php"); break;
		default: makeBtns();
	}
}else{ makeBtns(); } ?>
	</div>
</body>
</html>