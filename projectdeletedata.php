<?php
include("project.php");
$deletedata = "delete from members_tbl where ID='$idno'";
mysql_query($deletedata);
header("location:projectshowdata.php");
?>