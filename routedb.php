<?php
session_start();
	include("dbconn.php");
	 
       $route = $_SESSION['route'];
	 echo $route;
	$complaint=$_POST['comp'];
	
	$suggestion=$_POST['sugg'];
	$userid=$_SESSION['userid'];
	
	$sql="INSERT INTO routequery (Userid,Route,Complaint,Suggestion,Status,Date,Time) VALUES('$userid','$route','$complaint','$suggestion','PENDING',CURDATE(),CURTIME())";
	if(!mysqli_query($mysqli,$sql))
	{
		echo '<p>NOT INSERTED</p>';
	}
	
	else
	{

	header('Location:endpage.php');
	}
	
	?>
	
	