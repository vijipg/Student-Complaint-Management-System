<?php
include_once('dbconn.php');

$id=$_GET['id'];
$sql="update hostelquery set Status='COMPLETED' where ID=$id";
$res=$mysqli->query($sql);

?>