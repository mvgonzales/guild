<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<a href="Cabal.html">Click here to add data</a>
<h1>Show Data</h1>

<table border="1">

<tr>
		<td>ID</td>
        <td>Name</td>
        <td>Character</td>
        <td colspan="3">Phone</td>
 </tr>
<?php
include ("project.php");
$findata = "select * from members_tbl order by ID";
$query = mysql_query ($findata);
while ($datarow = mysql_fetch_array ($query))
	{
		echo ("<tr>
				<td>$datarow[ID]</td>
				<td>$datarow[NAME]</td>
				<td>$datarow[CHARACTER]</td>
				<td>$datarow[PHONE]</td>
				<td><a href= \"projecteditdata.php?idno=$datarow[ID]\">Modify</a></td>
				<td><a href= \"deletedata.php?idno=$datarow[ID]\">delete</a></td>
				</tr>");}


?>
</table>
</body>

</html>