<?php
session_start();
?>

<html>

<body>

	<?php
		$_SESSION['user']=NULL;
		$url = 'login.php';
		echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">'; 
	?>
	
</body>
</html>