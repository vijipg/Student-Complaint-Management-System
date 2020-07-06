<?php
session_start();
	include("dbconn.php");
	
	$year=$_POST['year'];
	$dept=$_POST['dept'];
	$sec=$_POST['sec'];
	$complaint=$_POST['comp'];
	$suggestion=$_POST['sugg'];
	$name=$_SESSION['userid'];
	$sql="INSERT INTO class_complaints(userid,Year,Department,Section,Complaint,Suggestion,Status,Date,Time) VALUES('$name','$year','$dept','$sec','$complaint','$suggestion','PENDING',CURDATE(),CURTIME())";
	if(!mysqli_query($mysqli,$sql))
	{
		echo '<p>NOT INSERTED</p>';
	}
	
	else
	{

	header('Location:endpage.php');
	}
	
	?>
	
	