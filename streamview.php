<?php
session_start();
?>

<!DOCTYPE html> 
<html>

<head>
	<title>MetaBlog | Stream</title> 
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

	<div data-role="header" data-position="fixed">
		<a href="login.php" data-icon="check" id="logout" class="ui-btn-left">Logout</a>

		<h1>Stream</h1>

	</div><!-- /header -->

	<div data-role="content">	
	
		<p class="listofblogs"><i>Pictures from all of your blogs.</i><p>	
		
		<div data-role="fieldcontain" class="streamviewfield">
		
		
		
		
			<?php
				$con = mysql_connect("mysql-user-master.stanford.edu", "ccs147strand14", "faexeepi");
				if (!$con)
				{
					die('Could not connect: ' . mysql_error());
				}
 				mysql_select_db("c_cs147_strand14", $con);
 				$currentuser = $_SESSION["user"]; 					
 				for ($i=0; $i<10; $i++) {
 					$query = "SELECT * FROM associations WHERE username='$currentuser'";
 					$result = mysql_query($query);
 					while ($row = mysql_fetch_assoc($result)) {
 						$blogurl = $row["url"];
						echo "<img src=".$blogurl.$i." class='largepic'/>";
 					}
 							
 				}			
 	 							
			?>
						
		</div>		
				
	</div><!-- /content -->
	
	<div data-role="footer" data-id="samebar" class="nav-glyphish-example" data-position="fixed" data-tap-toggle="false">
		<div data-role="navbar" class="nav-glyphish-example" data-grid="c">
		<ul>
			<li><a href="myblogs.php" id="heart" data-icon="custom">Blogs</a></li>
			<li><a href="discover.php" id="magnify" data-icon="custom">Discover</a></li>
			<li><a href="streamview.php" id="landscape" data-icon="custom" class="ui-btn-active">Stream</a></li>
			<li><a href="settings.php" id="gear" data-icon="custom">Manage</a></li>
		</ul>
		</div>
	</div>
	
</div><!-- /page one -->

</body>
</html>