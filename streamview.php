<?php
	session_start();

?>

<!DOCTYPE html> 
<html>

<?php
	if (!isset($_SESSION["user"])) {
		echo "<script type='text/javascript'>
			window.alert('Your seesion has timed out')
			</script>";
		$returnurl = 'login.php';
   		echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$returnurl.'">';
	}
?>	

<head>
	<title>MetaBlog | Stream</title> 
	<meta charset="utf-8">
	<meta name="apple-mobile-web-app-capable" content="yes">
 	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 

	<link rel="stylesheet" href="jquery.mobile-1.2.0.css" />
			<link rel="stylesheet" href="metablog-theme.css"/>

	<link rel="stylesheet" href="style.css" />
	<link rel="apple-touch-icon" href="/apple-touch-icon.png" />
	<link rel="apple-touch-startup-image" href="/apple-touch-startup-image.png"/>
	
	<script src="jquery-1.8.2.min.js"></script>
	<script src="jquery.mobile-1.2.0.js"></script>

</head>  
<body> 
	
<div data-role="page" id="stream">  

	<div data-role="header" data-position="fixed">
		<a href="login.php" id="logout" class="ui-btn-left" data-theme="d">Logout</a>

		<h1 style="font-size: 125%">Stream</h1>
		
		<a href="#add-blog-popup" data-rel="popup" id="add-new-blog" class="ui-btn-right" data-transition="pop" data-position-to="window" data-theme="d">Manage</a>			

		<div data-role="popup" id="add-blog-popup" class="mypopup">
			<a data-rel="back" data-role="button" data-theme="b" data-icon="delete" data-iconpos="notext" class="ui-btn-left">Close</a>
			</br>

				<form action="phpaddblog.php" id="someform" method="post">
					
					<label for="blog-url">Select blog to add:</label>
					<select name="blog-url" id="blog-url" data-mini="true">
					<option value="alakija.shutterchance.com/">alakija.shutterchance.com</option>
					<option value="architectureblog.tumblr.com/">architectureblog.tumblr.com</option>
					<option value="artsculptor.wordpress.com/">artsculptor.wordpress.com</option>
					<option value="blog.drawn.ca/">blog.drawn.ca</option>
					<option value="blogs.denverpost.com/">blogs.denverpost.com</option>
					<option value="www.boston.com/bigpicture/">boston.com/bigpicture</option>
					<option value="www.cardoncopy.com/">cardoncopy.com</option>
					<option value="www.cazurro.com/">cazurro.com</option>
					<option value="chromogenic.net/">chromogenic.net</option>
					<option value="www.deceptivemedia.co.uk/">deceptivemedia.co.uk</option>
					<option value="design.org/">design.org</option>
					<option value="www.designsponge.com/">designsponge.com</option>
					<option value="digitalnomad.nationalgeographic.com/">digitalnomad.nationalgeographic.com</option>
					<option value="everythingyoulovetohate.tumblr.com/">everythingyoulovetohate.tumblr.com</option>
					<option value="hongkiat.com/">hongkiat.com</option>
					<option value="www.learnsomethingeveryday.co.uk/">learnsomethingeveryday.co.uk</option>
					<option value="lovenordic.blogspot.com/">lovenordic.blogspot.com</option>
					<option value="www.positive-negative.com/">positive-negative.com</option>

					<option value="pushthemovement.tumblr.com/">pushthemovement.tumblr.com</option>
					<option value="sculpturegallery.blogspot.com/">sculpturegallery.blogspot.com</option>
					<option value="siphotos.tumblr.com/">siphotos.tumblr.com</option>
					<option value="surfermag.com/">surfermag.com</option>					
					<option value="theoccasionaloddcrop.tumblr.com/">theoccasionaloddcrop.tumblr.com</option>
					<option value="the-memes-blog.tumblr.com/">the-memes-blog.tumblr.com</option>
					<option value="thesartorialist.com/">thesartorialist.com</option>
					<option value="vandelaydesign.com/">vandelaydesign.com</option>
					<option value="wvs.topleftpixel.com/">wvs.topleftpixel.com</option>
					</select> 
					
					<input type="hidden" name="indicator" value="stream">

					<input type="submit" value="Add Blog" data-theme='a'/>
					
			</form>
			
			<form action="phpdeleteblog.php" id="someform" method="post">
					<div class="delete-container" data-theme="c">

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
		 				$a = 0; 				

		 				while ($row = mysql_fetch_assoc($result)) {
		 					$username = $row["username"];
		 					$url = $row["url"];
		 					$currentuser = $_SESSION["user"];
		 					if ($username == $currentuser) {
		 						echo "<input type='radio' name='delete-group' id='".$url."' value='".$url."' data-theme='c'/>
         						<label for='".$url."'>".$url."</label>";
         						$a++;
		 					}
		 				}
		 				
		 				if ($a != 0) {
		 				echo "</div>";
		 				echo "<input type='hidden' name='indicator' value='stream'/>";
		 				echo "<input type='submit' id ='delete-blog' value='Delete Blog' data-theme='a'/>";
		 				} else {
		 					echo "</div>";
		 					echo "<p class='caption'>You need to add blogs first!</p>";
		 				}

		 			?>
		 			
				</form>

		
			
		</div>


	</div><!-- /header -->

	<div data-role="content">	
			
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
			$count = mysql_num_rows($result);
			if ($count == 0) {
				echo "<img class='managepic' src='manage-tutorial.jpg'></img>";
			}	
		?>
			
		<div data-role="fieldcontain" class="streamviewfield">
		
			<?php
				$con = mysql_connect("mysql-user-master.stanford.edu", "ccs147strand14", "faexeepi");
				if (!$con)
				{
					die('Could not connect: ' . mysql_error());
				}
 				mysql_select_db("c_cs147_strand14", $con);
 				$currentuser = $_SESSION["user"]; 	
 				$rem = 0;	
 				$index = 0;			
 				for ($i=0; $i<10; $i++) {
 					$query = "SELECT * FROM associations WHERE username='$currentuser'";
 					$result = mysql_query($query);
 					while ($row = mysql_fetch_assoc($result)) {
 						$blogurl = $row["url"];
 						if ($rem == 6)
 							$rem = 0;
 						echo "<a href='#s".$index."' class='streamcontainer".$rem."' data-transition='pop' data-rel='popup' data-position-to='window'><img src='".$blogurl.$i."' class='streampic".$rem."'/></a>";
 						echo "<div data-role='popup' id='s".$index."' data-theme='a'>
							<a href='#' data-rel='back' data-role='button' data-theme='b' data-icon='delete' data-iconpos='notext' class='ui-btn-left' data-transition='pop'>Close</a>
							<img src='".$blogurl.$i."' class='fullscreen'/>
							</div>";
						$rem++;
						$index++;
 					}
 				}									
			?>
						
		</div>		
				
	</div><!-- /content -->
	
	<div data-role="footer" data-id="samebar" class="nav-glyphish-example" data-position="fixed" data-tap-toggle="false">
		<div data-role="navbar" class="nav-glyphish-example" data-grid="b">
		<ul>
			<li><a href="myblogs.php" id="heart" data-icon="custom" data-theme="b">Blogs</a></li>
			<li><a href="discover.php" id="magnify" data-icon="custom" data-theme="b">Discover</a></li>
			<li><a href="streamview.php" id="landscape" data-icon="custom" class="ui-btn-active ui-state-persist" data-theme="b">Stream</a></li>
		</ul>
		</div>
	</div>
	
</div><!-- /page one -->

</body>
</html>