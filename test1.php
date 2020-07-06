<?php
include_once('dbconn.php');
$id=$_GET['id'];
$sql="update routequery set Status='COMPLETED' where Id=$id";
$res=$mysqli->query($sql);

?>