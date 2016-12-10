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
                                <div>Admin</div>
                            </div>
                        </div>
                        <!--end user image section-->
						
                    </li>
                    
                    <li class="selected">
                        <a href="view_admindashboard.php"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
                    </li>
					<li>
                        <a href="view_adminprofile.php"><i class="fa fa-flask fa-fw"></i>Profile</a>
                    </li>
                    <li>
                        <a href="suform.php"><i class="fa fa-flask fa-fw"></i>Users</a>
                    </li>
					<li>
                        <a href="reports.html"><i class="fa fa-flask fa-fw"></i>Reports</a>
                    </li>
					<li>
                        <a href="feedbacks.html"><i class="fa fa-flask fa-fw"></i>Feedbacks</a>
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
                        <i class="fa fa-folder-open"></i><b>&nbsp;Hello ! </b>Welcome Back <b> Admin </b>
                    </div>
                </div>
                <!--end  Welcome -->
            </div>

            <div class="row">
				<div class="col-md-12">
					<div><h3>Requests</h3></div>
					<table border="1" width="100%">
						<thead>
							<tr>
								<td class="col-md-3"><h4>Name</h4></td>
								<td class="col-md-3"><h4>File</h4></td>
								<td class="col-md-3"><h4>Date</h4></td>
								<td class="col-md-3"><h4>Status</h4></td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="col-md-3">&nbsp;</td>
								<td class="col-md-3">&nbsp;</td>
								<td class="col-md-3">&nbsp;</td>
								<td class="col-md-3">&nbsp;</td>
							</tr>
						</tbody>
					</table>
				</div>
                
				
				
				
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
