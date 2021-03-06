<!DOCTYPE html>
<html>
	<head>
		<title>Stream View Screen</title>
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
	
		<div class="logout-button">
			<form action="login.php" id="someform" method="get">
				<input type="submit" class="bottom-bar-button" value="Log Out"/>
			</form>
		</div>

		</br>
		
		<div class="title">
			<h1>Stream View</h1>
		</div>
		
		<div class="explanation">
			<p>Here is where people can create 'playlists' or filters of their blogs that they can see in a visually-pleasing, cascading view.</p>
		</div>
			
		<div class="buttonbar">
		
			<form action="myblogs.php" id="someform" method="get">
				<input type="submit" class="bottom-bar-button" value="My Blogs" />
			</form>
			
			<form action="discover.php" id="someform" method="get">
				<input type="submit" class="bottom-bar-button" value="Discover"/>
			</form>
			
			<form action="stream-view.php" id="someform" method="get">
				<input type="submit" class="bottom-bar-button" value="Stream View"/>
			</form>
			
			<form action="settings.php" id="someform" method="get">
				<input type="submit" class="bottom-bar-button" value="Settings"/>
			</form>

		</div>
   
	</body>
</html>