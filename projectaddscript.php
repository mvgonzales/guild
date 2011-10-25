<?php
include("project.php");

$cname = $_POST['cname'];
$ccharacter = $_POST['ccharacter'];
$cphone = $_POST['cphone'];

mysql_query("INSERT INTO members_tbl (Id, Name, Character, Phone) VALUES (null, 'test', 'test', '1234')");



?>
<a href="projectshowdata.php">Click here to go back</a>