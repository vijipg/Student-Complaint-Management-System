<?php
session_start();
if(!isset($_SESSION['username']))
	header("Location:firstpg.php");
else
	$_SESSION['username'];
?>
<html>
<head>
	<title>thank</title>
	<link rel="stylesheet" href="endpage1.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="thank">
<center><i class="fa fa-check-circle" style="font-size:100px;color:green"></i>
<p>SUBMITTED SUCCESSFULLY!!!</p>
<button  onclick="window.location.href='welcome.php'">GO BACK TO HOME</input>

</body>