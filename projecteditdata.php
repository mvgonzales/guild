<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<table>



		<tr>



        	<td>
            <?php
include ("project.php");

				
		$extract = "select * from members_tbl where ID='$idno' ";
		$result = mysql_query($extract);
		$row = mysql_fetch_array($result);
		
			
?>
<form method="post" action="projectsavedata.php">
            <input type="hidden" name="PID" value="<?php echo "$row[ID]" ?>" /> 
            Name:<input type="text" name="newname" value="<?php echo "$row[Name]" ?>" />
            Character:<input type="text" name="newaddress" value="<?php echo "$row[CHARACTER]"?>" />
            Phone:<input type="text" name="newphonenumber" value="<?php echo"$row[PHONE]" ?>" />
          <input type="submit" name="Save" value="Save Changes" /> </form></td>
     	</tr>
	
	
 </table>      	
 
 
</body>
</html>