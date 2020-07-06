<?php
session_start();
include("dbconn.php");


if(!isset($_SESSION['userid']))
	header("Location:firstpg.php");
else{
	$route=$_POST['route'];
	$_SESSION['route']=$route;

	$_SESSION['userid'];



}
	
?>
 <html>
<head>
	<title>feedback</title>
	<link rel="stylesheet" href="bus_pg2.css">
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
<form action="routedb.php" method="POST">
  <h3>Enter your complaint</h3>
  <textarea type="textarea" rows="100" cols="50" class="box" name="comp"></textarea></br></br>
  <h3>Enter your suggestions</h3>
  <textarea type="textarea" rows="100"  cols="50" class="box" name="sugg"></textarea></br></br>
  <input type="submit">
  </form>
  
</div>
</body>
</html>