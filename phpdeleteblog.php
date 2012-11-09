<?php
session_start();
?>

<html>

<body>

	<?php
	$con = mysql_connect("mysql-user-master.stanford.edu", "ccs147strand14", "faexeepi");
	if (!$con)
		{
			die('Could not connect: ' . mysql_error());
		} 
	 mysql_select_db("c_cs147_strand14", $con); 

	
	$name=$_POST["blog-name"];
	$username=$_SESSION["user"];
	
	echo $name;
	echo $username;
	
	$sql= "DELETE FROM associations WHERE username='$username' AND nickname='$name'";
	$retval=mysql_query($sql, $con);
	$returnurl = 'settings.php';
   	echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$returnurl.'">';
	
	?>
	
</body>
</html>