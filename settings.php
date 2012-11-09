<?php
session_start();
?>

<!DOCTYPE html> 
<html>

<head>
	<title>MetaBlog | Manage</title> 
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

<div data-role="page">

	<div data-role="header" data-position="fixed">
		<a href="login.php" data-icon="check" id="logout" class="ui-btn-left">Logout</a>

		<h1>Manage</h1>
	</div><!-- /header -->

	<div data-role="content">
	
			
			<div data-role="collapsible" id="add-blog" data-iconpos="right" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d">
				<h3>Add Blog</h3>

				<form action="phpaddblog.php" id="someform" method="post">
					<label for="blog-url">Enter blog url:</label>
					<input class="forminput" type="text" name="blog-url" id="blog-url" value=""/>
					<input type="submit" value="Add Blog"/>
				</form>
			</div>

			<div data-role="collapsible" id="delete-blog-popup" data-iconpos="right" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d">
				<h3>Delete Blog</h3>
				
				<form action="phpdeleteblog.php" id="someform" method="post">
					<legend>Choose blog to delete:</legend>
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
		 						echo "<input type='radio' name='delete-group' id='".$url."' value='".$url."' />
         						<label for='".$url."'>".$url."</label>";
		 					}
		 				}
		 			?>
					<input type="submit" value="Delete Blog"/>
				</form>
				
			</div>	

<!--			<a href="#create-filter-popup" data-rel="popup" data-role="button" data-icon="plus" data-transition="pop" data-position-to="window">Create Filter</a>		
			
			<a href="#delete-filter-popup" data-rel="popup" data-role="button" data-icon="minus" data-transition="pop" data-position-to="window">Delete Filter</a>		

	<a href="#edit-profile-popup" data-rel="popup" data-role="button" data-icon="info" data-transition="pop" data-position-to="window">Edit Profile</a>		
	



			
			<div data-role="popup" id="create-filter-popup" class="popup-content">
				<a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-right">Close</a>
				<h2>Create Filter</h2>
				<label for="blog-name">Enter filter name:</label>
				<input type="text" name="filter-name" id="filter-name" value=""/>
				<p>Select blogs to include:</p>
				<div class="blog-list-small">
					<label><input type="checkbox" name="pushthemovement" /> Push The Movement </label>
					<label><input type="checkbox" name="everythingyoulovetohate" /> Everything You Love To Hate </label>
					<label><input type="checkbox" name="thebigpicture" /> The Big Picture </label>
				</div>
				<a href="#" data-rel="back" data-role="button" data-theme="b" data-icon="add">Create</a>
			</div>
			
			<div data-role="popup" id="delete-filter-popup" class="popup-content">
				<a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-right">Close</a>
				<h2>Delete Filter</h2>
				<div class="blog-list-large">
					<label><input type="checkbox" name="filter-0" /> All Blogs </label>
					<label><input type="checkbox" name="filter-1" /> Special Filter </label>
				</div>
				<a href="#" data-rel="back" data-role="button" data-theme="b" data-icon="add">Delete Selected</a>
			</div>  
			
			<div data-role="popup" id="edit-profile-popup" class="popup-content">
				<a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-right">Close</a>
				<h2>Edit Profile</h2>
				<label for="blog-name">Name:</label>
				<input type="text" name="blog-name" id="blog-name" value="Michael Jordan"/>
				<label for="blog-url">Email:</label>
				<input type="text" name="blog-name" id="blog-name" value="airjordan23@nike.com"/>
				<label for="blog-url">Password:</label>
				<input type="text" name="blog-name" id="blog-name" value="thebestever"/>
				<a href="#" data-rel="back" data-role="button" data-theme="b" data-icon="add">Change Info</a>
			</div> -->		
			
			<a href="#aboutPopup" data-rel="popup" data-role="button" data-mini="true" class="about-button" data-transition="pop">About Metablog</a>		
								
			<div data-role="popup" id="aboutPopup" class="popup-picture" data-theme="a">
				<a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-right">Close</a>
				<h1 class="about">About The App</h1>
				<p>MetaBlog is a smooth and seamless way to quickly view and organize all your favorite photo blogs. Just type in the urls of the photo blogs you've been following, and MetaBlog will automatically update all of them - in one spot. We're building MetaBlog to allow you to connect with your content on the go. It's like a blog... within a blog!</p>
			</div>		
	
	</div><!-- /content -->

     <div data-role="footer" data-id="samebar" class="nav-glyphish-example" data-position="fixed" data-tap-toggle="false">
		<div data-role="navbar" class="nav-glyphish-example" data-grid="c">
		<ul>
			<li><a href="myblogs.php" id="heart" data-icon="custom">Blogs</a></li>
			<li><a href="discover.php" id="magnify" data-icon="custom">Discover</a></li>
			<li><a href="streamview.php" id="landscape" data-icon="custom">Stream</a></li>
			<li><a href="settings.php" id="gear" data-icon="custom" class="ui-btn-active">Manage</a></li>
		</ul>
		</div>
	</div>

</div><!-- /page -->

</body>
</html>