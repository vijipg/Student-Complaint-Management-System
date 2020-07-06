<?php
include("dbconn.php");
session_start();

if(!isset($_SESSION['userid']))
	header("Location:firstpg.php");
else
	$_SESSION['userid'];
?>
<html>
<head>
<title>report</title>
<link rel="stylesheet" href="issue_pg1.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> 
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>
<!--div id="nav-placeholder">

</div>

<script>
$(function(){
  $("#nav-placeholder").load("nav.html");
});
</script!-->

<div class="sec">
	<ul class="grid">
	<li>
		<div class=" box img1">
			<a href="classroom_pg.php">
				<h3>CLASSROOM</h3>
				
			</a>
		</div>
	</li>
	
	<li>
		<div class="box img2">
			<a href="routes.php">
				<h3>BUS</h3>
			
			</a>
		</div>
	</li>
	
	<li>
		<div class="box img3">
			<a href="#">
				<h3>HOSTEL</h3>
			
			</a>
		</div>
	</li>
	</ul>
</div>
</div>
</body>
</html>
