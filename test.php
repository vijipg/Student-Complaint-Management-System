<?php
include_once('dbconn.php');
$id=$_GET['id'];
$sql="update class_complaints set Status='COMPLETED' where userid=$id";
$res=$mysqli->query($sql);

?>