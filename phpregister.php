<?php
session_start();
?>
<!DOCTYPE html> 
<html>
<head>
	<meta charset="utf-8">
	<meta name="apple-mobile-web-app-capable" content="yes">
 	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 

	<link rel="stylesheet" href="jquery.mobile-1.2.0.css" />

	<link rel="stylesheet" href="style.css" />
	<link rel="apple-touch-icon" href="strandsm.png" />
	<link rel="apple-touch-startup-image" href="strandsm.png">
	
	<script src="jquery-1.8.2.min.js"></script>
	<script src="jquery.mobile-1.2.0.js"></script>

</head> 

<body>

	<?php
	$con = mysql_connect("mysql-user-master.stanford.edu", "ccs147strand14", "faexeepi");
	if (!$con)
		{
			die('Could not connect: ' . mysql_error());
		}
 
	 mysql_select_db("c_cs147_strand14", $con); 
	
	 $name=$_POST["username"];
	 $password=$_POST["password"];
	 $reenter=$_POST["renter-password"];
	
	$sql = "SELECT * FROM accounts WHERE username='$name'";
	$result = mysql_query($sql);
	$count = mysql_num_rows($result);
		  
	if($count!=0){
		echo "<script type='text/javascript'>
			window.alert('This username already exists. Try again please!')
			</script>";	
		$url = 'login.php';
		echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';	
	} else if ($password != $reenter) {
	 	echo "<script type='text/javascript'>
window.alert('Passwords were entered differently. Try again please!')
</script>";	
		$url = 'login.php';
		echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">'; 
	 } else {
		$sql= "INSERT INTO accounts (username, password) VALUES ('$name', '$password')";
		$retval=mysql_query($sql, $con);
		$url = 'myblogs.php';
   		echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
	 }
	 ?>

	
</body>

</html>