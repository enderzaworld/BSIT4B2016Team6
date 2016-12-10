<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barangay Registrtaion</title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
 
    <!-- Page-Level CSS -->
    <link href="assets/plugins/morris/morris-0.4.3.min.css" rel="stylesheet" />
   </head>
<body>
    <!--  wrapper -->
    <div id="wrapper">
        <!-- navbar top -->
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
		
			<!--  page-wrapper -->
        <div id="page-wrapper">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!--End Page Header -->
            </div>

            <div class="row">
                <!-- Welcome -->
                <div class="col-lg-12">
                    <div class="alert alert-info">
                        <i class="fa fa-folder-open"></i><b>&nbsp;Hello ! </b>Welcome Back <b> Danica Limon </b>
                    </div>
                </div>
                <!--end  Welcome -->
            </div>

            <div class="row">
                <!--quick info section -->
                <div class="col-lg-4">
                    <div class="alert alert-danger text-center">
                        <i class="fa fa-check-circle fa-3x"></i>&nbsp;</b> Barangay Clearance 

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="alert alert-success text-center">
                        <i class="fa  fa-pencil fa-3x"></i>&nbsp;</b> Indigency Form  
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="alert alert-info text-center">
                        <i class="fa fa-road fa-3x"></i>&nbsp;</b> TODA Form
                    </div>
                </div>
				<div class="col-lg-4">
                    <div class="alert alert-warning text-center">
                        <i class="fa  fa-certificate fa-3x"></i>&nbsp;</b> Cedula Form
                    </div>
                </div>
				<div class="col-lg-4">
                    <div class="alert alert-danger text-center">
                        <i class="fa  fa-home fa-3x"></i>&nbsp;</b> Residencial ID
                    </div>
                </div>
                <!--end quick info section -->
				
				
				
            </div>

        </div>
        <!-- end page-wrapper -->
    </div>
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/plugins/pace/pace.js"></script>
    <script src="assets/scripts/siminta.js"></script>
    <!-- Page-Level Plugin Scripts-->
    <script src="assets/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/plugins/morris/morris.js"></script>
    <script src="assets/scripts/dashboard-demo.js"></script>

</body>

</html>
