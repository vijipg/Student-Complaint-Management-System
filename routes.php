<?php
session_start();
if(!isset($_SESSION['userid']))
	header("Location:firstpg.php");
else
	$_SESSION['userid'];
?>
<html>
<head>
	<title>routes</title>
	<link rel="stylesheet" href="route_sel.css">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> 
	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body style="
	background:url('routebg.jpg');
	background-size:cover;">
<div id="nav-placeholder">

</div>

<script>
$(function(){
  $("#nav-placeholder").load("nav.php");
});
</script>

<div class="outer">
<h1 ><center>CHOOSE YOUR ROUTE</h1>
<form action="feedback1.php" method="POST">
<label class="container">  
  <input type="radio" name="route" checked="checked" value="Velachery">Velachery</input>
  <span class="checkmark"></span>
</label>

<label class="container">
  <input type="radio" name="route" value="Hasthinapuram">Hasthinapuram</input>
  <span class="checkmark"></span>
</label>

<label class="container">
  <input type="radio" name="route" value="Chengalpet">Chengalpet</input>
  <span class="checkmark"></span>
</label>

<label class="container">
  <input type="radio" name="route" value="Pallavaram">Pallavaram</input>
  <span class="checkmark"></span>
</label>
<label class="container">  
  <input type="radio" name="route" value="Tambaram">Tambaram</input>
  <span class="checkmark"></span>
</label>

<label class="container">
  <input type="radio" name="route" value="Medavakkam">Medavakkam</input>
  <span class="checkmark"></span>
</label>

<label class="container">
  <input type="radio" name="route">Thoraipakkam</input>
  <span class="checkmark"></span>
</label>

<label class="container">
  <input type="radio" name="route">Chromepet</input>
  <span class="checkmark"></span>
   
</label>
<input type="submit" class="button" value="OK">
</form>
</div>

</body>
</html>
