<?php
if(isset($_POST['bsubmit']))
{
include("Exercise2_db.php");	
$user = $_POST['uname'];
$pwd = $_POST['password'];

$user = mysql_real_escape_string($user);
$pwd = mysql_real_escape_string($pwd);
$selectqry = "SELECT * from login_tb WHERE Username ='$user' AND Password = '$pwd' ";
$sql = mysql_query($selectqry);
	$nr = mysql_num_rows($sql);
		if ($nr == 0){
		
			echo "<a href='projectlogin.html'>unable to login</a>";
}

			else {
			while($row = mysql_fetch_array($sql))
			{
		$name = $row['Username'];
			}
			session_start();
			$_SESSION['mark'] = $name;
			
			
				echo "<h1> Welcome, " . $name . "!" . "<br />";
				echo "<a href='proceedpage.php'>Proceed to Page</a>";
				}
}


?> 
	
