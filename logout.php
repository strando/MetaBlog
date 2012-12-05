<?php
session_start();
?>

<html>

<body>

	<?php
		unset($_SESSION['user']);
		$url = 'login.php';
		echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">'; 
	?>
	
</body>
</html>