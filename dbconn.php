<?php
$mysqli = new mysqli("localhost", "root", "","login");
    # check connection
    if ($mysqli->connect_errno) {
        echo "<p>MySQL error no {$mysqli->connect_errno} : {$mysqli->connect_error}</p>";
        exit();
    }
	//else
		//echo "connected"
	?>