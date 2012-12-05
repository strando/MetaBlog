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

	
	$name=$_POST["delete-group"];
	$indicator=$_POST["indicator"];	
	$username=$_SESSION["user"];
		
	$sql= "DELETE FROM associations WHERE username='$username' AND url='$name'";
	$retval=mysql_query($sql, $con);
	
	echo "<script type='text/javascript'>
window.alert('Blog Deleted!')
</script>";	
	
	if ($indicator == 'blogs') 
		$returnurl = 'myblogs.php';
	if ($indicator == 'discover') 
		$returnurl = 'discover.php';
	if ($indicator == 'stream') 
		$returnurl = 'streamview.php';
  	echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$returnurl.'">';
	
	?>
	
</body>
</html>