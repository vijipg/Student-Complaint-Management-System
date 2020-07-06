<?php
session_start();
if(!isset($_SESSION['userid']))
	header("Location:firstpg.php");
else
	$_SESSION['userid'];
	
?>
<html>
<head>
<meta character="UTF-8">
<title>HOME</title>
<link rel="stylesheet" href="homestyle.css">
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

<div class="banner-text">
<?php
echo "<h1>Welcome  ".$_SESSION['username']."</h1>"
?>
<p> Addressing Students Queries</p>


</div>
<div class="animation-area">
<ul class="box-area">
<li></li>
<li></li>
<li></li>
<li></li>
<li></li>
<li></li>
</ul>
</div>

</body> 