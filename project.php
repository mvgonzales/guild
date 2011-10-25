<?php
$database = "project_db";
$servername = "localhost";
$username = "root";
$password = "rrls";

$con =  mysql_connect($servername, $username, $password);
if (!$con)
	die ("Not connected to database" . mysql_error() . "<br>");
	
mysql_select_db($database); 
if (!mysql_select_db($database))
die ("Database invalid" . mysql_error());



?>
