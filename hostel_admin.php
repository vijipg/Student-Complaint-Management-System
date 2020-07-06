<?php

session_start();
include_once('dbconn.php');
?>

<html>
<head>
<title>Fetch data</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<style>
.filter
{
	border:2px solid black;
	width:200px;
	height:220px;
	margin:-10px 70px 200px 1100px;
}
</style>
</head>

<body>

<table id="myTable"  border="1px" style="width:70%; line-height:45px;">
<tr>
<th colspan="6"><h2>HOSTEL COMPLAINTS</h2></tr>
</tr>
  <tr>

<th>ROOM NO</th>
<th>ISSUES</th>
<th>COMPLAINT</th>
<th>SUGGESTIONS</th>
<th>STATUS</th>
 </tr>
 <?php
if (isset($_POST['submit'])) {

//$val1=$_POST['dept'];
//$val2=$POST['sec'];
if(isset($_POST['Hstl'])){
$hos=$_POST['Hstl'];
$query="select * from hostelquery where Select_hostel='$hos' order by Status='COMPLETED'";
 
$result=$mysqli->query($query);
while($rows=mysqli_fetch_assoc($result))
{
echo "<tr>";
echo "<td>".$rows['RoomNo']."</td>";
echo "<td>".$rows['Select_Issues']."</td>";
echo "<td>".$rows['Complaint']."</td>";
echo "<td>".$rows['Suggestion']."</td>";

if($rows['Status']=="PENDING")
echo '<td><button style="width:100%;height:90px"  id="pending_btn'.$rows['ID'].'" onclick="change_val('.$rows['ID'].')">PENDING</td>';
else
echo"<td>".$rows['Status']."</td>";

echo "</tr>";
}
}
}

else
{
$query="select * from hostelquery order by Status='COMPLETED'";
$result=$mysqli->query($query);
while($rows=mysqli_fetch_assoc($result))
{
echo "<tr>";
echo "<td>".$rows['RoomNo']."</td>";
echo "<td>".$rows['Select_Issues']."</td>";
echo "<td>".$rows['Complaint']."</td>";
echo "<td>".$rows['Suggestion']."</td>";

if($rows['Status']=="PENDING")
echo '<td><button style="width:100%;height:90px"  id="pending_btn'.$rows['ID'].'" onclick="change_val('.$rows['ID'].')">PENDING</td>';
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
<b>HOSTEL:</b></br></br>
 <input type="radio" name="Hstl" value="Boys">Boys</input></br></br>
 <input type="radio" name="Hstl" value="Girls">Girls</input></br></br>
 <center><input type="submit" name="submit" value="OK"/></center>


</form>
</div>
<script>

function change_val(id1)
{
//alert(id1);

var data1=0;
var btn_val=document.getElementById("pending_btn"+id1);



if(btn_val.innerHTML=="PENDING")
{

btn_val.innerHTML="COMPLETED";
data1=1;

$.ajax({

url:"test2.php",
data:{val:data1,id:id1}
});
}


}
</script>



</body>
</html>





