<?php
session_start();
if(!isset($_SESSION['userid']))
	header("Location:firstpg.php");
else
	$_SESSION['userid'];
	
?>
<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet"  href="choose.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
<div id="nav-placeholder">

</div>

<script>
$(function(){
  $("#nav-placeholder").load("nav.php");
});
</script>
<h1 style="margin-top:100px;color:blue;"><center>CHOOSE THE CATEGORY</center></h1>
<div class="container">

<div class="box">
<div class="icon1"><i class="fa" aria-hidden="true"></i></div>
<div class="content">
<h3>CLASSROOM</h3>
<p>Submit your class-related complaints here</p>
<button id="myButton" style="width:50%;height:15%;" class="button" >ENTER</button>

<script type="text/javascript">
    document.getElementById("myButton").onclick = function () {
        location.href = "classroom_pg.php";
    };
</script>
</div>
</div>
<div class="box">
<div class="icon2"><i class="fa fa-bus" aria-hidden="true"></i></div>
<div class="content">
<h3>BUS</h3>
<p>Submit your bus-related complaints here</p>
<button id="myButton1" style="width:50%;height:15%;" class="button" >ENTER</button>

<script type="text/javascript">
    document.getElementById("myButton1").onclick = function () {
        location.href = "routes.php";
    };
</script>
</div>
</div>
<div class="box">
<div class="icon3"><i class="fa" aria-hidden="true"></i></div>
<div class="content">
<h3>HOSTEL</h3>
<p>Submit your hostel-related complaints here</p>
<button id="myButton2" style="width:50%;height:15%;" class="button" >ENTER</button>

<script type="text/javascript">
    document.getElementById("myButton2").onclick = function () {
        location.href = "hostel_pg.php";
    };
</script>
</div>
</div>
	</div>
</body>
</html>