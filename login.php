<!DOCTYPE html> 
<html>

<head>
	<title>MetaBlog</title> 
	<meta charset="utf-8">
	<meta name="apple-mobile-web-app-capable" content="yes">
 	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 

	<link rel="stylesheet" href="jquery.mobile-1.2.0.css" />

	<link rel="stylesheet" href="style.css" />
	<link rel="apple-touch-icon" href="strandsm.png" />
	<link rel="apple-touch-startup-image" href="/apple-touch-icon.png"/>
	
	<script src="jquery-1.8.2.min.js"></script>
	<script src="jquery.mobile-1.2.0.js"></script>

</head> 

	
<body> 

<div data-role="page" id="one">

	<div>
		<img src="strandsm.png" class="centerpic"/>	
	</div>

	<div data-role="header">
		<h1>MetaBlog</h1>
	</div><!-- /header -->

	<div data-role="content">	
	
			<div data-role="collapsible" data-iconpos="right" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d" class="login-collapsible">
				<h2>New User</h2>
				<div data-type="field-contain">
				<form action="phpregister.php" id="someform" method="post">
					
					<label for="username" class="ui-hidden-accessible">Username:</label>
					<input class="forminput" type="text" name="username" id="username" placeholder="Username" autocapitalize="off"/>
					
					<label for="password" class="ui-hidden-accessible">Password:</label>
					<input class="forminput" type="password" name="password" id="password" placeholder="Password" autocapitalize="off"/>
					
					<label for="reenter-password" class="ui-hidden-accessible">Password:</label>
					<input class="forminput" type="password" name="reenter-password" id="reenter-password" placeholder="Re-enter Password" autocapitalize="off"/>
				
					<input type="submit" value="Register" />
				</form>
				</div>
			</div>
					
			<div data-role="collapsible" data-iconpos="right" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d" class="login-collapsible">
				<h2>Already Registered</h2>
				<form action="phplogin.php" id="someform" method="post">
				
					<label for="username" class="ui-hidden-accessible">Username:</label>
					<input class="forminput" type="text" name="username" id="username" placeholder="Username" autocapitalize="off"/>
					
					<label for="password" class="ui-hidden-accessible">Password:</label>
					<input class="forminput" type="password" name="password" id="password" placeholder="Password" autocapitalize="off"/>
				
					<input type="submit" value="Log In" />
					
				</form>
	
			
<!--				<a href="#" data-role="button" data-mini="true" class="about-button">Forgot Password</a> -->
			</div>	
			
			<a href="about-login.php" data-role="button" data-mini="true" class="about-button">About Metablog</a>

			
	</div><!-- /content -->
	
</div>
	
</div>

</body>
</html>