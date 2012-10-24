<!DOCTYPE html>
<html>
	<head>
		<title>Register Screen</title>
		<link rel="apple-touch-icon" href="appicon.png" />
		<link rel="apple-touch-startup-image" href="startup.png">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta name="viewport" content="width=device-width, user-scalable=no" />
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="chosen/chosen.css" />
		<script src="chosen/chosen.jquery.js" type="text/javascript"></script>

	</head>

	<body>
		
		<div class="title">
			<h1>Register</h1>
		</div>
		
		<div class="explanation">
			<p>Screen for new users to sign up and create a profile for the app.</p>
		</div>
			
		<div class="buttonarea">
		
			<form action="myblogs.php" id="someform" method="post">
				<label>User Name: <input class="forminput" type="text" name="username" /></label>
    			<label>Email: <input class="forminput" type="text" name="email" autocapitalize="off" /></label>
    			<label>Password: <input class="forminput" type="text" name="username" /></label>
    			<label>Re-enter Password: <input class="forminput" type="text" name="username" /></label>
				<input type="submit" class="medium red awesome" value="Continue" />
			</form>

		</div>
   
	</body>
</html>