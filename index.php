<!DOCTYPE html>

<html>
<head>
	<meta charset="UTF-8">
	<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
	<script src="bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>
	<script src="plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
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
				<li id="menuHome" class="menu selected">
					<a href="#home">Home</a>
				</li>
				<li id="menuProfile" class="menu">
					<a href="#users">Profile</a>
				</li>
				<li id="menuDocuments" class="menu">
					<a href="#documents">Documents</a>
				</li>
			</ul>
		</div>
	</div>
</div>

<div id="page">
	<br />
	<br />
	<br />
	<div id="contents">
		
	</div>
	
	<div id="footer">
		<div class="background">
			<div class="body">				
				<p id="footnote">
					© Copyright 2017. All rights reserved.
				</p>
			</div>
		</div>
	</div>
</div>
<script>
$(document).ready(function(){
	var loading = false;/*
	function getParameterByName(name, url) {
		if (!url) {
		  url = window.location.href;
		}
		name = name.replace(/[\[\]]/g, "\\$&");
		var regex = new RegExp("[?&#]" + name + "(=([^&#]*)|&|#|$)"),
			results = regex.exec(url);
		if (!results) return null;
		if (!results[2]) return '';
		return decodeURIComponent(results[2].replace(/\+/g, " "));
	}*/
	
	$(".menu").mouseup(function(){
		if(!loading){
			$.ajax({
			type: 'GET',
			url: 'partials/'+$(this).find('a').attr('href').substring(1)+'.php',
			timeout: 2000,
			success: function(data) {
				$(".menu").removeClass("selected");
				$(this).addClass("selected");
				$("#contents").html(data);
				//myFunction();
				var arr = $("#contents").find('script')
				for (var n = 0; n < arr.length; n++)
					eval(arr[n].innerHTML)
			},
			error: function (XMLHttpRequest, textStatus, errorThrown) {
			  alert("error retrieving content:");
			}});
		}else{
			alert("loading content please wait");
		}
	});
	
	//first load
	var firstselected = $(".menu.selected");
	$.ajax({
	type: 'GET',
	url: 'partials/'+firstselected.find('a').attr('href').substring(1)+'.php',
	timeout: 2000,
	success: function(data) {
		$(".menu").removeClass("selected");
		firstselected.addClass("selected");
		$("#contents").html(data);
		//myFunction();
		var arr = $("#contents").find('script')
		for (var n = 0; n < arr.length; n++)
			eval(arr[n].innerHTML)
	},
	error: function (XMLHttpRequest, textStatus, errorThrown) {
	  alert("error retrieving content:");
	}});
});
</script>
</body>
</html>