<?php

	session_start();
	include_once("dbconn.php");
	$query="select Complaint,Date,Time,Status from class_complaints where userid=".$_SESSION['userid']." UNION select Complaint,Date,Time,Status from routequery where Userid=".$_SESSION['userid']." UNION select Complaint,Date,Time,Status from hostelquery where userid=".$_SESSION['userid']."  order by Date,Time desc";
	$result=$mysqli->query($query);
	echo "<div class='mydiv'>";
	while($rows=mysqli_fetch_assoc($result))
	{
		
		echo "<font size='2'>".$rows['Date']." &nbsp; ".$rows['Time']."</font></br>";
		if($rows['Status']=='PENDING')
			$color='red';
		else
			$color='green';
		echo "<font size='5'>".$rows['Complaint']."<font style=color:".$color." margin-left:0px;>-".$rows['Status']."</font>";
		echo "<hr>";
	}
	echo "</div>"
	
?>
<html>
<head>
<link rel="stylesheet" href="prev_submission.css">
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


</body>
</html>