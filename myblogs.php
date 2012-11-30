<?php
	session_start();
?>

<!DOCTYPE html> 
<html>

<head>
	<title>MetaBlog | Blogs</title> 
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

<div data-role="header" data-position="fixed">
		<a href="login.php" data-icon="check" id="logout" class="ui-btn-left">Logout</a>
	
		<h1>Blogs</h1>
		
		<a href="#add-blog-popup" data-rel="popup" id="add-new-blog" class="ui-btn-right" data-transition="pop" data-position-to="window">Manage</a>			
	
		<div data-role="popup" id="add-blog-popup" class="popup-content">
			<a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-left">Close</a>

				<form action="phpaddblog.php" id="someform" method="post">
					
					<label for="blog-url">Select blog to add:</label>
					<select name="blog-url" id="blog-url" data-mini="true">
					   <option value="www.boston.com/bigpicture/">boston.com/bigpicture</option>
					   <option value="pushthemovement.tumblr.com/">pushthemovement.tumblr.com</option>
					   <option value="theoccasionaloddcrop.tumblr.com/">theoccasionaloddcrop.tumblr.com</option>
					   <option value="alakija.shutterchance.com/">alakija.shutterchance.com</option>
					   <option value="wvs.topleftpixel.com/">wvs.topleftpixel.com</option>
					   <option value="everythingyoulovetohate.tumblr.com/">everythingyoulovetohate.tumblr.com</option>
					   <option value="www.cazurro.com/">cazurro.com</option>
					   <option value="www.deceptivemedia.co.uk/">deceptivemedia.co.uk</option>
					   <option value="www.positive-negative.com/">positive-negative.com</option>
					   <option value="chromogenic.net/">chromogenic.net</option>
					</select> 
					
					<input type="submit" value="Add Blog" data-theme='b'/>
					
			</form>
			
			<form action="phpdeleteblog.php" id="someform" method="post">
					<legend>Choose blog to delete:</legend>
					<div class="delete-container" data-theme="c">

					<?php
						$con = mysql_connect("mysql-user-master.stanford.edu", "ccs147strand14", "faexeepi");
						if (!$con)
						{
							die('Could not connect: ' . mysql_error());
						}
		 				mysql_select_db("c_cs147_strand14", $con);
		 				$query = "SELECT * FROM associations";
		 				$result = mysql_query($query);
		 				
		 				while ($row = mysql_fetch_assoc($result)) {
		 					$username = $row["username"];
		 					$url = $row["url"];
		 					$currentuser = $_SESSION["user"]; 				
		 					if ($username == $currentuser) {
		 						echo "<input type='radio' name='delete-group' id='".$url."' value='".$url."' data-theme='c'/>
         						<label for='".$url."'>".$url."</label>";
		 					}
		 				}
		 			?>
		 			</div>

					<input type="submit" value="Delete Blog"/>
				</form>
		
			
		</div>
			
	</div><!-- /header -->

	
	<!-- /header -->

	<div data-role="content">
		
		<ul data-role="listview" data-filter="true">

			<?php
 				$currentuser = $_SESSION["user"]; 					
 				$query = "SELECT * FROM associations WHERE username='$currentuser'";
 				$result = mysql_query($query);
 				$count = mysql_num_rows($result);
			if ($count == 0) {
 					echo "<div style='max-width: 300px;'><p style='text-align: center;'><b>Welcome to MetaBlog!<b><br>MetaBlog is an app made to quickly view and <br>organize all of your favorite photo blogs.<br><b>Blogs<b> (the page you are currently on) is where you <br> can view photos from all the blogs you want to follow.<br><b>Discover<b> is where you can find new content.<br><b>Stream<b> mixes all of the photos from your blogs <br> together in a full screen display.<br> Finally, <b>Manage<b> is where you can add and delete<br> blogs.<br> Enjoy!<p></div>";
 				}
 				while ($row = mysql_fetch_assoc($result)) {
 					$url = $row["url"];
 					$newquery = "SELECT * FROM allblogs WHERE url = '$url'";
 					$newresult = mysql_query($newquery);	
 					while ($newrow = mysql_fetch_assoc($newresult)) {
						$photocount = 0;
						$pagecount = 0;
						$numphotos = $newrow["numphotos"];
						$blogurl = $newrow["url"];
						$blogname = $newrow["name"];
						echo "<li data-role='collapsible' data-collapsed-icon='arrow-r' data-expanded-icon='delete' data-iconpos='left'>
				   			<h3>".$blogname."</h3>
				   			<div class='picture-collection'>";
						while ($photocount < $numphotos) {
			   				$pageid = $blogname.$photocount;
			   				$photoid = $blogname.'small'.$photocount;
				   			echo "<a href='#".$pageid."' data-transition='pop'><img src=".$blogurl.$photocount." class='smallpic'/></a>"; 
				   				$photocount++;
				   		}
						echo "</div></li>";
 					}
 				}
 				
			?>
			
		</ul>
	</div><!-- /content -->
    <div data-role="footer" data-id="samebar" class="nav-glyphish-example" data-position="fixed" data-tap-toggle="false">
		<div data-role="navbar" class="nav-glyphish-example" data-grid="b">
		<ul>
			<li><a href="myblogs.php" id="heart" data-icon="custom" class="ui-btn-active" data-ajax="false">Blogs</a></li>
			<li><a href="discover.php" id="magnify" data-icon="custom" data-ajax="false">Discover</a></li>
			<li><a href="streamview.php" id="landscape" data-icon="custom" data-ajax="false">Stream</a></li>
		</ul>
		</div>
	</div>

</div><!-- /page -->

			<?php
				$con = mysql_connect("mysql-user-master.stanford.edu", "ccs147strand14", "faexeepi");
				if (!$con)
				{
					die('Could not connect: ' . mysql_error());
				}
 				mysql_select_db("c_cs147_strand14", $con);
 				$currentuser = $_SESSION["user"]; 					
 				$query = "SELECT * FROM associations WHERE username='$currentuser'";
 				$result = mysql_query($query);
 				while ($row = mysql_fetch_assoc($result)) {
 					$url = $row["url"];
 					$newquery = "SELECT * FROM allblogs WHERE url = '$url'";
 					$newresult = mysql_query($newquery);	
 					while ($newrow = mysql_fetch_assoc($newresult)) {
						$pagecount = 0;
						$numphotos = $newrow["numphotos"];
						$blogurl = $newrow["url"];
						$blogname = $newrow["name"];
						while ($pagecount < $numphotos) {
							$pageid = $blogname.$pagecount;
							echo "<div data-role='page' id='".$pageid."' data-theme='a'>
								<a href='#one' data-role='button' data-theme='d' data-icon='delete' data-iconpos='notext' class='back' data-transition='pop'>Close</a>
								<img src='".$blogurl.$pagecount."' class='fullscreen'/>
								</div>";
							$pagecount++;
						}
 					}
 				}
 				
			?>

</body>
</html>