<!DOCTYPE html> 
<html>

<head>
	<title>MetaBlog | Register</title> 
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

<div data-role="page" id="one">

	<div>
		<img src="strandsm.png" class="centerpic"/>	
	</div>

	<div data-role="header">
		<h1>Register</h1>
	</div><!-- /header -->

	<div data-role="content">	
			
			<form action="myblogs.php" id="someform" method="get">
				<label>User Name: <input class="forminput" type="text" name="username" /></label>
    			<label>Email: <input class="forminput" type="text" name="email" autocapitalize="off" /></label>
    			<label>Password: <input class="forminput" type="text" name="username" /></label>
    			<label>Re-enter Password: <input class="forminput" type="text" name="username" /></label>
				<input type="submit" class="medium red awesome" value="Continue" />
			</form>
			
			<form action="login.php" id="someform" method="get">
				<input type="submit" value="Cancel"/>
			</form>
			
	</div><!-- /content -->
	
</div>
	
</div>

</body>
</html>