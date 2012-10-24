<!DOCTYPE html>
<html>
	<head>
		<title>Metablog Home Screen</title>
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
		
		<div class="picture">
			<img src="strandsm.png"/>	
		</div>
		
		
		<div class="title">
			<h1>MetaBlog</h1>
		</div>
		
		<div class="explanation">
			<p>This is the welcome screen where users can log in or register to make an account.</p>
		</div>
			
		<div class="buttonarea">
		
			<form action="myblogs.php" id="someform" method="get">
					<label>Username: <input class="forminput" type="text" name="username" /></label>
    				<label>Password: <input class="forminput" type="text" name="password" autocapitalize="off" /></label>
				<input type="submit" class="medium red awesome" value="Log In" />
			</form>

			<form action="login.php" id="someform" method="get">
				<input type="submit" class="medium red awesome" value="Forgot Password?" />
			</form>
	
			<form action="register.php" id="someform" method="get">
				<input type="submit" class="medium red awesome" value="Register"/>
			</form>
			
			<form action="about.php" id="someform" method="get">
				<input type="submit" value="About"/>
			</form>

		</div>
   
	</body>
</html>