<?php
	session_start();
?>

<!DOCTYPE html> 
<html>

<head>
	<title>MetaBlog | Discover</title> 
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

<div data-role="page" id="discover">

	<div data-role="header" data-position="fixed">
		<a href="logout.php" data-icon="check" id="logout" class="ui-btn-left">Logout</a>
	
		<h1>Discover</h1>
		
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

	<div data-role="content">
	
		<table class="streamtable">
			<tr>
				<?php
					$con = mysql_connect("mysql-user-master.stanford.edu", "ccs147strand14", "faexeepi");
					if (!$con)
					{
						die('Could not connect: ' . mysql_error());
					}
	 				mysql_select_db("c_cs147_strand14", $con);
	 				$currentuser = $_SESSION["user"]; 
	 				
	 				$pictureCounter = 0;	
					$query = "SELECT * FROM allblogs";
					$result = mysql_query($query);
					$count = mysql_num_rows($result);
					$index = rand(1, $count);
					
					for ($i = 0; $i < $index; $i ++) {
						$row = mysql_fetch_array($result);
					}
					
					$blogurl = $row["url"];
	 				$blogname = $row["name"];
	 				echo "<h2 style='text-align: center'>".$blogname."</h2>";
	 				for ($i=0; $i<9; $i++) {
	 					if ($pictureCounter % 3 == 0 && $pictureCounter != 0) {
	 						echo "</tr><tr><td><a href='#pic".$i."' data-transition='pop'><img src=".$blogurl.$i." class='discoverpic'/></td>";
	 						$pictureCounter++;
	 					} else {
							echo "<td><a href='#pic".$i."' data-transition='pop'><img src=".$blogurl.$i." class='discoverpic'/></td>";
							$pictureCounter++;
	 					}		
	 				}			
	 				

	 	 							
				?>
			</tr>
		</table>
		
		
		<form action="phpaddblog2.php" id="someform" method="post" class="discoverbutton">
			<input type="submit" name="blog-url" id="blog-url" value="<?= $blogurl ?>" data-icon="plus" data-iconpos="right" />
		</form>
		
		<a href="discover.php" data-role="button" data-icon="search" data-ajax="false" data-iconpos="right" class="discoverbutton">See New Blog!</a>
	
	</div><!-- /content -->

    <div data-role="footer" data-id="samebar" class="nav-glyphish-example" data-position="fixed" data-tap-toggle="false">
		<div data-role="navbar" class="nav-glyphish-example" data-grid="b">
		<ul>
			<li><a href="myblogs.php" id="heart" data-icon="custom" data-ajax="false">Blogs</a></li>
			<li><a href="discover.php" id="magnify" data-icon="custom" class="ui-btn-active" data-ajax="false">Discover</a></li>
			<li><a href="streamview.php" id="landscape" data-icon="custom" data-ajax="false">Stream</a></li>
		</ul>
		</div>
	</div>

</div><!-- /page -->

<?php
$a = 0;
while ($a < 9) {
	echo "<div data-role='page' id='pic".$a."' data-theme='a'>
		<a href='#discover' data-role='button' data-theme='d' data-icon='delete' data-iconpos='notext' class='back' data-transition='pop'>Back</a>
		<img src='".$blogurl."$a' class='fullscreen'/>
	</div>";
	$a++;
}
?>
</body>
</html>