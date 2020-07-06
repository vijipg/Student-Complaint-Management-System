<?php

	session_start();
	include_once("dbconn.php");
	if(isset($_POST['route']))
	{
	$arr=$_POST['route'];
	$ids = join("','",$arr);   
	}
?>

<html>
<head>
	<title>Fetch data</title>
	<link rel="stylesheet" href="bus_admin1.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body>

<table id="myTable"  border="1px" style="width:70%; line-height:45px;">
<tr>
	<th colspan="4"><h2>BUS COMPLAINTS</h2></tr>
</tr>
  <tr>
	<th>ROUTE</th>
	<th>COMPLAINT</th>
	<th>SUGGESTION</th>
	<th>STATUS</th>
 </tr>
 <?php
if (isset($_POST['submit'])) {
	
if(isset($_POST['route']))
{
	$query="select * from routequery where Route in ('$ids') order by Status='COMPLETED'";
	$result=$mysqli->query($query);
	while($rows=mysqli_fetch_assoc($result))
	{
		echo "<tr>";
				echo "<td>".$rows['Route']."</td>";
				echo "<td>".$rows['Complaint']."</td>";
				echo "<td>".$rows['Suggestion']."</td>";
				if($rows['Status']=="PENDING")
					echo '<td><button style="width:100%;height:90px"  id="pending_btn'.$rows['Id'].'" onclick="change_val('.$rows['Id'].')">PENDING</td>';
				else
					echo"<td>".$rows['Status']."</td>";
			
		echo "</tr>";
	}
}
}
else
{
	$query="select * from routequery order by Status='COMPLETED'";
	$result=$mysqli->query($query);
	while($rows=mysqli_fetch_assoc($result))
	{
		echo "<tr>";
				echo "<td>".$rows['Route']."</td>";
				echo "<td>".$rows['Complaint']."</td>";
				echo "<td>".$rows['Suggestion']."</td>";
				if($rows['Status']=="PENDING")
					echo '<td><button style="width:100%;height:90px"  id="pending_btn'.$rows['Id'].'" onclick="change_val('.$rows['Id'].')">PENDING</td>';
				else
					echo"<td>".$rows['Status']."</td>";
			
		echo "</tr>";
	
}
}


?>


</table>
<br>
<div class="filter">
<form action="" method="post">

 <h4><center>Filter By</h4>
<b>ROUTES</b></br></br>
 <input type="checkbox" name="route[]" value="Velachery">Velachery</input></br>
 <input type="checkbox" name="route[]" value="Hasthinapuram">Hasthinapuram</input></br>
 <input type="checkbox" name="route[]" value="Chengalpet">Chengalpet</input></br>
 <input type="checkbox" name="route[]" value="Pallavaram">Pallavaram</input></br>
<input type="checkbox" name="route[]" value="Tambaram">Tambaram</input></br>
 <input type="checkbox" name="route[]" value="Medavakkam">Medavakkam</input></br>
 <input type="checkbox" name="route[]" value="Thoraipakkam" >Thoraipakkam</input></br>
 <input type="checkbox"="route[]" value="Chromepet">Chromepet</input></br></br>
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
		
		url:"test1.php",
		data:{val:data1,id:id1}
	});
	}
	
	
}
</script>


</body>
</html>