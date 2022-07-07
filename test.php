<?php

$user_name = "admin";
	$password = "#R4RY~}mXRe;mt5D";
	$database = "konvergenz";
	$server = "database-2.ckcysvomqjoq.eu-west-2.rds.amazonaws.com";

	$db_handle = mysql_connect($server, $user_name, $password);
	$db_found = mysql_select_db($database, $db_handle);

    if ($db_found) {

print ('connected')
    }

    ?>