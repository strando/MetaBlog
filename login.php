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
	<link rel="apple-touch-icon" href="/apple-touch-icon.png" />
	<link rel="apple-touch-startup-image" href="/apple-touch-startup-image.png"/>
	
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
				<h2>Login</h2>
				<form action="phplogin.php" id="someform" method="post">
				
					<label for="username" class="ui-hidden-accessible">Username:</label>
					<input class="forminput" type="text" name="username" id="username" placeholder="Username" autocapitalize="off"/>
					
					<label for="password" class="ui-hidden-accessible">Password:</label>
					<input class="forminput" type="password" name="password" id="password" placeholder="Password" autocapitalize="off"/>
				
					<input type="submit" value="Go!" />
					
				</form>
	
			
<!--				<a href="#" data-role="button" data-mini="true" class="about-button">Forgot Password</a> -->
			</div>	
	
			<div data-role="collapsible" data-iconpos="right" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d" class="login-collapsible">
				<h2>Are you new to Metablog?</h2>
				<div data-type="field-contain">
				<form action="phpregister.php" id="someform" method="post">
					
					<label for="username" class="ui-hidden-accessible">Username:</label>
					<input class="forminput" type="text" name="username" id="username" placeholder="Username" autocapitalize="off"/>
					
					<label for="password" class="ui-hidden-accessible">Password:</label>
					<input class="forminput" type="password" name="password" id="password" placeholder="Password" autocapitalize="off"/>
					
					<label for="reenter-password" class="ui-hidden-accessible">Password:</label>
					<input class="forminput" type="password" name="reenter-password" id="reenter-password" placeholder="Re-enter Password" autocapitalize="off"/>
				
					<input type="submit" value="Register!" />
				</form>
				</div>
			</div>
			
			<a href="#aboutPopup" data-rel="popup" data-role="button" data-mini="true" class="about-button" data-transition="pop">About Metablog</a>		
								
			<div data-role="popup" id="aboutPopup" class="popup-picture" data-theme="a">
				<a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-right">Close</a>
				<h1 class="about">About The App</h1>
				<p>MetaBlog is a smooth and seamless way to quickly view and organize all your favorite photo blogs. Just type in the urls of the photo blogs you've been following, and MetaBlog will automatically update all of them - in one spot. We're building MetaBlog to allow you to connect with your content on the go. It's like a blog... within a blog!</p>
			</div>				

			
	</div><!-- /content -->
	
</div>
	
</div>

</body>
</html>