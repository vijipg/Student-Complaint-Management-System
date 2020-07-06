<?php
session_start();
if(!isset($_SESSION['userid']))
	header("Location:firstpg.php");
else
	$_SESSION['userid'];
	
?>
<html>
<head>
<title>HOSTEL</title>
<link rel="stylesheet" href="hostel_dup1.css">
<link href="https://fonts.googleapis.com/css?family=Nunito:400,300" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>
<div id="nav-placeholder">

</div>

<script>
$(function(){
  $("#nav-placeholder").load("nav.php");
});
</script>
<div class="shadow-textarea">

<form action="hosteldb.php" method="POST">

</br></br>
<b>Room No.</b><br>
<input type="text" name="RoomNu">
</br></br>
<b>Select Hostel</b>
<br>
<input type="radio" name="select" id="boys" value="BOYS">
<label for="boys">BOYS</label><br>
<input type="radio" name="select" id="girls" value="GIRLS">
<label for="girls">GIRLS</label><br>
<br>
<b>Select issues in hostel</b>
<br>
<input type="checkbox" name="issues[]" id="electricity" value="FAN">
<label for="electrcity">FAN</label><br>
<input type="checkbox" name="issues[]" id="light" value="TUBELIGHT">
<label for="electrcity">TUBELIGHT</label><br>
<input type="checkbox" name="issues[]" id="water" value="WATER">
<label for="water">WATER</label><br>
<input type="checkbox" name="issues[]" id="restroom" value="RESTROOM">
<label for="restroom">RESTROOM</label><br>
<input type="checkbox" name="issues[]" id="others" value="OTHERS">
<label for="others">OTHERS</label><br><br>
<b><label for="Complaint">Enter your complaint</label><b>
<br>
  <textarea type="textarea" rows="100" cols="50" class="box" name="comp"></textarea></br></br>
 <b><label for="Complaint">Enter your suggestion</label><b>
<br>
  <textarea type="textarea" rows="100" cols="50" class="box" name="sugg"></textarea></br></br>

<input type="submit" value="Submit">
<input type="reset" value="Reset">


</form>
</body>
</html>