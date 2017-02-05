<!DOCTYPE html>

<html>
<head>
	<meta charset="UTF-8">
	<title>TUP - Manila</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" href="bootstrap-3.3.7/dist/css/bootstrap.min.css">
</head>
<body>

<div id="header">
	<div class="background">
		<div id="logo">
			<a href="index.html"><img src="images/tup-logo.png" alt="LOGO" height="110" width="110">&nbsp;Technological University of the Philippines</a>
		</div>
		<div id="navigation">
			<ul>
				<li>
					<a href="home.php">Home</a>
				</li>
				<li>
					<a href="users.php">Users</a>
				</li>
				<li class="selected">
					<a href="documents.php">Documents</a>
				</li>
				<li>
					<a href="#"></a>
				</li>
			</ul>
		</div>
	</div>
</div>
<br>
<br>
<div id="page">		
	<div id="contents">				
		<div class="col-md-12">                   
			<div class="panel panel-default">
				<div class="panel-heading">
					Data Tracking
				</div>
				<div class="panel-body">
					<div class="table-responsive">
						<table class="table table-striped table-bordered table-hover" id="dataTables-example">
							<thead>
								<tr>
									<th>Tracking No.</th>
									<th>Date</th>
									<th>Type of Documents</th>
									<th>Saan galing</th>
									<th>Kanino galing</th>
									<th>kanino papunta</th>
									<th>Remarks</th>
								</tr>
							</thead>			 	
							<tbody>
								<tr>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>	
								<tr>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
							</tbody>
						</table>
					</div>                       
				</div>                    
			</div>
		</div>    			
	</div>	
	<div id="footer">
		<div class="background">
			<div class="body">
				<p id="footnote">
					© Copyright 2023. All rights reserved.
				</p>
			</div>
		</div>
	</div>
	<script src="bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>
	<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
	<script src="plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
	<script>
        $(document).ready(function () {
        $('#dataTables-example').dataTable();
        });
    </script>  
</div>
</body>
</html>