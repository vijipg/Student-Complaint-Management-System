<?php

	session_start();
	include_once("dbconn.php");
	
?>

<html>
<head>
	<title>Fetch data</title>
	<link rel="stylesheet" href="admin_page1.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body>

<table id="myTable"  border="1px" style="width:70%; line-height:45px;">
<tr>
	<th colspan="6"><h2>CLASSROOM COMPLAINTS</h2></tr>
</tr>
  <tr>
	<th>YEAR</th>
	<th>DEPARTMENT</th>
	<th>SECTION</th>
	<th>COMPLAINT</th>
	<th>SUGGESTION</th>
	<th>STATUS</th>
 </tr>
 <?php
if (isset($_POST['submit'])) {
	
	//$val1=$_POST['dept'];
	//$val2=$POST['sec'];
if(isset($_POST['year']) || isset($_POST['dept']) || isset($_POST['sec']))
{
	if(isset($_POST['year']) && isset($_POST['dept']) &&isset($_POST['sec']) )
	{
		$year=$_POST['year'];
		$dept=$_POST['dept'];
		$sec=$_POST['sec'];
		$query="select * from class_complaints where Year=$year and Department='$dept' and Section='$sec'";
	}
	else if(isset($_POST['year']) && isset($_POST['dept']))
	{
		$year=$_POST['year'];
		$dept=$_POST['dept'];
		$query="select * from class_complaints where Year=$year and Department='$dept'";
	}
	else if(isset($_POST['year']) && isset($_POST['sec']))
	{
		$year=$_POST['year'];
		$sec=$_POST['sec'];
		$query="select * from class_complaints where Year=$year and Section='$sec'";
	}
	else if(isset($_POST['dept']) &&isset($_POST['sec']) )
	{
		
		$dept=$_POST['dept'];
		$sec=$_POST['sec'];
		$query="select * from class_complaints where Department='$dept' and Section='$sec'";
	}
	else if(isset($_POST['year']))
	{
		$val=$_POST['year'];
		$query="select * from class_complaints where Year=$val";
	}
	else if(isset($_POST['dept'])){
		$val=$_POST['dept'];
		$query="select * from class_complaints where Department='$val'";
	}
	else if(isset($_POST['sec'])){
		$val=$_POST['sec'];
		$query="select * from class_complaints where Section='$val'";
	}
 
	$result=$mysqli->query($query);
	while($rows=mysqli_fetch_assoc($result))
	{
		echo "<tr>";
				echo "<td>".$rows['Year']."</td>";
				echo "<td>".$rows['Department']."</td>";
				echo "<td>".$rows['Section']."</td>";
				echo "<td>".$rows['Complaint']."</td>";
				echo "<td>".$rows['Suggestion']."</td>";
				if($rows['Status']=="PENDING")
					echo '<td><button style="width:100%;height:90px"  id="pending_btn'.$rows['userid'].'" onclick="change_val('.$rows['userid'].')">PENDING</td>';
				else
					echo"<td>".$rows['Status']."</td>";
			
		echo "</tr>";
	}

}
}
else
{
	$query="select * from class_complaints order by Status='COMPLETED'";
	$result=$mysqli->query($query);
	while($rows=mysqli_fetch_assoc($result))
	{
		echo "<tr>";
				echo "<td>".$rows['Year']."</td>";
				echo "<td>".$rows['Department']."</td>";
				echo "<td>".$rows['Section']."</td>";
				echo "<td>".$rows['Complaint']."</td>";
				echo "<td>".$rows['Suggestion']."</td>";
				if($rows['Status']=="PENDING")
					echo '<td><button style="width:100%;height:90px"  id="pending_btn'.$rows['userid'].'" onclick="change_val('.$rows['userid'].')">PENDING</td>';
				else
					echo"<td>".$rows['Status']."</td>";
				echo "</tr>";
				
		
		
	
	/*if($_GET['val']==1){
		$sql="update classquery set Status=Completed where id=$rows['id']";
		$result=$mysqli->query($sql);
	}*/
	}
}
?>


</table>
<br>
<div class="filter">
<form action="" method="post">

 <h4><center>Filter By</h4>
<b>YEAR:</b></br>
 <input type="radio" name="year" value="1">1</input>
 <input type="radio" name="year" value="2">2</input>
 <input type="radio" name="year" value="3" >3</input>
 <input type="radio" name="year" value="4">4</input></br></br>
<b>DEPARTMENT:</b></br>
 <input type="radio" name="dept" value="CSE">CSE</input>
 <input type="radio" name="dept" value="IT">IT</input>
 <input type="radio" name="dept" value="ECE" >ECE</input></br></br>
 <input type="radio" name="dept" value="EEE">EEE</input>
 <input type="radio" name="dept" value="BIOTECH">BIOTECH</input>
 <input type="radio" name="dept" value="EIE">EIE</input></br></br>
 <input type="radio" name="dept" value="ICE" >ICE</input>
 <input type="radio" name="dept" value="MECH">MECH</input></br></br>
 
 <b>SECTION:</b></br>
 <input type="radio" name="sec" value="A">A</input>
 <input type="radio" name="sec" value="B">B</input>
 <input type="radio" name="sec" value="C" >C</input></br></br>
 <center><input type="submit" name="submit" value="OK"></input></center>


</form>
</div>
<script>

function change_val(id1)
{
	
	var data1=0;
	var btn_val=document.getElementById("pending_btn"+id1);
	

	
	if(btn_val.innerHTML=="PENDING")
	{

		btn_val.innerHTML="COMPLETED";
		data1=1;
		
	$.ajax({
		
		url:"test.php",
		data:{val:data1,id:id1}
	});
	}
	
	
}
</script>



</body>
</html>