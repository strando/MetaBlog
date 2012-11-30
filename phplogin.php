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

	
	 $name=$_POST["username"];
	 $password=$_POST["password"];
	
	$sql = "SELECT * FROM accounts WHERE username='$name' and password='$password'";
	
	$result = mysql_query($sql);

	$count = mysql_num_rows($result);
		  
	if($count==1){
// Register $myusername, $mypassword and redirect to file \"login_success.php\"
		$_SESSION['user']=$name;
		$url = 'myblogs.php';
		echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">'; 

	} else {
		echo "<script type='text/javascript'>
window.alert('Incorrect username/password combination. Try again please!')
</script>";	
		$url = 'login.php';
		echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">'; 
	}

	?>
	
</body>
</html>