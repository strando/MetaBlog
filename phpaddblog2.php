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

	$url=$_POST["blog-url"];	
	$username=$_SESSION["user"];
	
	
	$query = "SELECT * FROM associations WHERE username='$username' AND url='$url'";
	$result = mysql_query($query);
	$count = mysql_num_rows($result);
			
	if($count == 1){

		echo "<script type='text/javascript'>
		window.alert('You already added this blog!')
		</script>";

	} else {
		
		$sql= "INSERT INTO associations (username, url) VALUES ('$username', '$url')";
		$retval=mysql_query($sql, $con);
	
		echo "<script type='text/javascript'>
		window.alert('Blog Added!')
		</script>";
	}	
	
	$returnurl = 'discover.php';
  	echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$returnurl.'">';
	
	?>
	
</body>
</html>