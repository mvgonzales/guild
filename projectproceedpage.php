<?php
session_start();
$vari = $_SESSION['mark'];

if (!$vari || $vari =='')
{
	die("<a href='projectlogin.html'>LOG-IN!!!</a>");}
	else
	echo "WELCOME<br />";
?>
<a href="projectlogout.php">LOGOUT</a>