<?php

	session_start();
	 include("dbconn.php");

    $userid = $_POST['userid'];
    $password = $_POST['pass'];

    $sql = "SELECT * from users WHERE userid='$userid' AND password ='$password'";
	
    $result = $mysqli->query($sql);
	

$r = mysqli_fetch_array($result);
$_SESSION['role'] = $r['role'];  //set role to session - This will be needed to restricted pages pertaining to role.
if (!$result->num_rows == 1) {

       echo "<p>Invalid username/password combination</p>";
	   $msg = '<br /><br /><font color="#FF0000">Invalid User Or Pass </font><br />';

	   header("Location:firstpg.php?error=1");
}
else if($r['role'] == 'admin' && $r['userid']=='admin1')
{
  header("Location:admin.php" );
}
else if($r['role'] == 'admin' && $r['userid']=='admin2')
{
  header("Location:bus_admin.php" );
}
else if($r['role'] == 'admin' && $r['userid']=='admin3')
{
  header("Location:hostel_admin.php");
}
else if($r['role'] == 'user')
{
		$_SESSION['userid']=$userid;
		$_SESSION['username']=$r['username'];
	
		
		header("Location:welcome.php");
}

	

?>      

	