<!DOCTYPE html> 
<html>

<head>
	<title>MetaBlog | Settings</title> 
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

<div data-role="page">

	<div data-role="header">
		<h1>Settings</h1>
		<a href="login.php" data-icon="check" id="logout" class="ui-btn-right">Logout</a>
	</div><!-- /header -->

	<div data-role="content">
	
		<div data-role="fieldcontain">
		
			<div class="explanation">
				<p>Controls the settings for the app including how to add new blogs, delete blogs, create filters for the stream view, and other functionality that we haven't thought of yet.</p>
			</div>
			<form action="#" id="someform" method="get">
				<input type="submit" value="Add Blog" data-icon="plus"/>
			</form>
			<form action="#" id="someform" method="get">
				<input type="submit" value="Delete Blog" data-icon="minus"/>
			</form>
			<form action="#" id="someform" method="get">
				<input type="submit" value="Manage Filters" data-icon="grid"/>
			</form>
			<form action="#" id="someform" method="get">
				<input type="submit" value="Edit Profile" data-icon="star"/>
			</form>

			
			<form action="about-settings.php" id="someform" method="get">
				<input type="submit" value="About Metablog" data-icon="info"/>
			</form>
			
		</div>	
	
	</div><!-- /content -->

     <div data-role="footer" data-id="samebar" class="nav-glyphish-example" data-position="fixed" data-tap-toggle="false">
		<div data-role="navbar" class="nav-glyphish-example" data-grid="c">
		<ul>
			<li><a href="myblogs.php" id="heart" data-icon="custom">My Blogs</a></li>
			<li><a href="discover.php" id="magnify" data-icon="custom">Discover</a></li>
			<li><a href="streamview.php" id="landscape" data-icon="custom">Stream View</a></li>
			<li><a href="settings.php" id="gear" data-icon="custom" class="ui-btn-active">Settings</a></li>
		</ul>
		</div>
	</div>
	<script type="text/javascript">
	$("#logout").hide();
	$("#info").hide();
	var retrievedObject = localStorage.getItem('username');
	if (retrievedObject == "test") {
		$("#form").hide();	
		$("#logout").show();
		$("#info").show();
	}
	$("#logout").click(function() {
		localStorage.removeItem('username');
		$("#form").show();
		$("#logout").hide();
		$("#info").hide();
	});
	</script>
</div><!-- /page -->

</body>
</html>