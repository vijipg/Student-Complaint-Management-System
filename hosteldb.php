<?php
session_start();
include_once('dbconn.php');

$name=$_SESSION['userid'];

$RoomNo=$_POST['RoomNu'];
$selectHstl=$_POST['select'];
$selectIssues=$_POST['issues'];
$issue=implode(',',$selectIssues);
echo $issue;

$complaints=$_POST['comp'];
$suggestions=$_POST['sugg'];

$sql="INSERT INTO hostelquery(userid,RoomNo,Select_hostel,Select_Issues,Complaint,Suggestion,Date,Time,Status) VALUES ('$name','$RoomNo','$selectHstl','$issue','$complaints','$suggestions',CURDATE(),CURTIME(),'PENDING')";
if(!mysqli_query($mysqli,$sql))
{
echo '<p>NOT INSERTED</p>';

//error_reporting(E_ALL);
}

else
{
header('Location:endpage.php');
//echo 'Inserted';
}


?>