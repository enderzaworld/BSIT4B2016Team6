<!DOCTYPE html>
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
    <link href="assets/css/main-style.css" rel="stylesheet" />
    <!-- Page-Level CSS -->
    <link href="assets/plugins/morris/morris-0.4.3.min.css" rel="stylesheet" />
   </head>
<body>
    <!--  wrapper -->
    <div id="wrapper">
        <!-- navbar top -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
            <!-- navbar-header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- end navbar-header -->
            <!-- navbar-top-links -->
            <ul class="nav navbar-top-links navbar-right">
               
                <li class="dropdown">				
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-3x"></i>
                    </a>
                    <!-- dropdown user-->
                    <ul class="dropdown-menu dropdown-user"> 
						<li><a href="#"><i class="fa fa-user fa-fw"></i>Danica Limon</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i>Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
                        </li>
                    </ul>
                    <!-- end dropdown-user -->
                </li>
                <!-- end main dropdown -->
            </ul>
            <!-- end navbar-top-links -->

        </nav>
        <!-- end navbar top -->

        <!-- navbar side -->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <!-- sidebar-collapse -->
            <div class="sidebar-collapse">
                <!-- side-menu -->
                <ul class="nav" id="side-menu">
                    <li>
						
                        <!-- user image section-->
                        <div class="user-section">
                            <div class="user-section-inner">
                                <img src="assets/img/user.jpg" alt="">
                            </div> 
                            <div class="user-info">
                                <div>Danica Limon</div>
                            </div>
                        </div>
                        <!--end user image section-->
						
                    </li>
                    
                    <li class="selected">
                        <a href="admin_dashboard.html"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
                    </li>
					<li>
                        <a href="admin_profile.html"><i class="fa fa-user fa-fw"></i>Profile</a>
                    </li>
					<li>
                        <a href="reports.html"><i class="fa fa-file fa-fw"></i>Reports</a>
                    </li>
					<li>
                        <a href="feedbacks.html"><i class="fa fa-comment fa-fw"></i>Feedbacks</a>
                    </li>
                </ul>
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>
        <!-- end navbar side -->
		
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