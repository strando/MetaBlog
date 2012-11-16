<?php
session_start();
?>
<!DOCTYPE html> 
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
	 $reenter=$_POST["reenter-password"];
	 
	 echo $password;
	 echo $reenter;
	
	$sql = "SELECT * FROM accounts WHERE username='$name'";
	$result = mysql_query($sql);
	$count = mysql_num_rows($result);
		  
	if($count!=0){
		echo "<script type='text/javascript'>
			window.alert('This username already exists. Try again please!')
			</script>";	
		$url = 'login.php';
		echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';	
	} else if (strcmp($password, $reenter) != 0) {
	 	echo "<script type='text/javascript'>
window.alert('Passwords were entered differently. Try again please!')
</script>";	
		$url = 'login.php';
		echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">'; 
	 } else {
		$sql= "INSERT INTO accounts (username, password) VALUES ('$name', '$password')";
		$retval=mysql_query($sql, $con);
		$_SESSION['user']=$name;
		$url = 'myblogs.php';
   		echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
	 }
	 ?>

	
</body>

</html>