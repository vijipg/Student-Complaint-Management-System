<?php
session_start();
if(!isset($_SESSION['username']))
	header("Location:firstpg.php");
else
	$_SESSION['username'];
	
?>
<html>
<head>
	<title>classroom</title>
	<link rel="stylesheet"  href="classroom_pg.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>
<body>
<div class="navbar">
  <a href="#home">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <li style="float:right"><a href="logout.php" name="logout"><i class="fa fa-sign-out" style="font-size:24px"></i>Logout</a></li>
 
</div>


<div class="class_form">
<h2><center>FILL THE DETAILS</h2></br>
<div class="container">
<form action="class_db.php" method="POST">
  <b>Select year:     
  <select name="year">
	<option>1</option>
	<option>2</option>
	<option>3</option>
	<option>4</option>
	</select></br></br>
  <b>Select department:</b>
  <select name="dept">
	<option>CSE</option>
	<option>IT</option>
	<option>ECE</option>
	<option>EEE</option>
	<option>MECH</option>
	<option>CHEM</option>
	<option>BIOTECH</option>
	<option>ICE</option>
	</select></br></br>
	<b>Select section:     
  <select name="sec">
	<option>A</option>
	<option>B</option>
	<option>C</option>
	</select></br></br>
 
  <h3>Enter your complaint</h3>
  <textarea type="textarea" rows="100" cols="50" class="box" name="comp" required></textarea></br></br>
  <h3>Enter your suggestions</h3>
  <textarea type="textarea" rows="100"  cols="50" class="box" name="sugg" required></textarea></br></br>
  <input type="submit" onclick="popup()">  <input type="reset">

  </form>
</div>
</body>
</html>