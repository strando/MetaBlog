<!DOCTYPE html> 
<html>

<head>
	<title>MetaBlog | My Blogs</title> 
	<meta charset="utf-8">
	<meta name="apple-mobile-web-app-capable" content="yes">
 	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 

	<link rel="stylesheet" href="jquery.mobile-1.2.0.css" />
	<link rel="stylesheet" href="style.css" />
	<link rel="apple-touch-icon" href="strandsm.png" >
	<link rel="apple-touch-startup-image" href="/apple-touch-icon.png"/>

	<script src="jquery-1.8.2.min.js"></script>
	<script src="jquery.mobile-1.2.0.js"></script>
	

</head>  
<body> 



<div data-role="page">

<div data-role="header" data-position="fixed">
		<a href="login.php" data-icon="check" id="logout" class="ui-btn-left">Logout</a>
	
		<h1>My Blogs</h1>
		
		<a href="#add-blog-popup" data-rel="popup" data-icon="plus" id="add-new-blog" class="ui-btn-right" data-transition="pop" data-position-to="window">Blog</a>			
	
		<div data-role="popup" id="add-blog-popup" class="popup-content">
			<a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-right">Close</a>
			<h3>Add Blog</h3>
			<label for="blog-name">Enter blog name:</label>
			<input type="text" name="blog-name" id="blog-name" value=""/>
			<label for="blog-url">Enter blog url:</label>
			<input type="text" name="blog-url" id="blog-url" value=""/>
			<a href="#" data-rel="back" data-role="button" data-theme="b" data-icon="add">Add Blog</a>
		</div>
			
	</div><!-- /header -->

	
	<!-- /header -->

	<div data-role="content">
		
			<?php
				$con = mysql_connect("mysql-user-master.stanford.edu", "ccs147strand14", "faexeepi");
				if (!$con)
				{
					die('Could not connect: ' . mysql_error());
				}
 				mysql_select_db("c_cs147_strand14", $con);
				$query = "SELECT * FROM myblogs";
				$result = mysql_query($query);
				
				while ($row = mysql_fetch_assoc($result)) {
					$photocount = 0;
					$popupcount = 0;
					$numphotos = $row["numphotos"];
					$blogurl = $row["url"];
					$blogname = $row["name"];
					echo "<div data-role='collapsible' data-collapsed-icon='arrow-r' data-expanded-icon='arrow-d' data-iconpos='right'>
		   				<h3>".$blogname."</h3>
		   				<div class='picture-collection'>";
		   			while ($photocount < $numphotos) {
		   				$popupid = $blogname.'popup'.$photocount;
		   				$photoid = $blogname.'small'.$photocount;

		   				echo "<a href='#".$popupid."' data-rel='popup' data-transition='pop' data-position-to='window'><img src=".$blogurl.$photocount." class='smallpic'/></a>"; 
		   				$photocount++;
		   			}
					echo "</div></div>";
						
					while ($popupcount < $numphotos) {
						$popupid = $blogname.'popup'.$popupcount;
						echo "<div data-role='popup' id='".$popupid."' class='popup-picture' data-theme='a'>
							<a href='#' data-rel='back' data-role='button' data-theme='a' data-icon='delete' data-iconpos='notext' class='ui-btn-right'>Close</a>
							<img src=".$blogurl.$popupcount." class='largepic'/>
							</div>";
						$popupcount++;
					}
				}
			?>
			
	</div><!-- /content -->

   
    <div data-role="footer" data-id="samebar" class="nav-glyphish-example" data-position="fixed" data-tap-toggle="false">
		<div data-role="navbar" class="nav-glyphish-example" data-grid="c">
		<ul>
			<li><a href="myblogs.php" id="heart" data-icon="custom" class="ui-btn-active">My Blogs</a></li>
			<li><a href="discover.php" id="magnify" data-icon="custom">Discover</a></li>
			<li><a href="streamview.php" id="landscape" data-icon="custom">Stream View</a></li>
			<li><a href="settings.php" id="gear" data-icon="custom">Settings</a></li>
		</ul>
		</div>
	</div>

</div><!-- /page -->

</body>
</html>