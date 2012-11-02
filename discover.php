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
	<link rel="apple-touch-startup-image" href="strandsm.png">
	
	<script src="jquery-1.8.2.min.js"></script>
	<script src="jquery.mobile-1.2.0.js"></script>

</head>  
<body> 

<div data-role="page">

	<div data-role="header" data-position="fixed">
		<a href="login.php" data-icon="check" id="logout" class="ui-btn-left">Logout</a>
	
		<h1>Discover</h1>
	</div><!-- /header -->

	<div data-role="content">
	
		<div data-role="fieldcontain">
		
		<ul data-role="listview" data-filter="true">
			<li data-role="collapsible" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d">
		   		<h3>Animals</h3>
		  		<div class="picture-collection">
		 			<a href="#a1Popup" data-rel="popup" id="a1small" data-transition="pop" data-position-to="window"><img src="animals/a1small.jpeg"/></a>
		   			<a href="#a2Popup" data-rel="popup" id="a2small" data-transition="pop" data-position-to="window"><img src="animals/a2small.jpeg"/></a>
		   			<a href="#a3Popup" data-rel="popup" id="a3small" data-transition="pop" data-position-to="window"><img src="animals/a3small.jpeg"/></a>
		   			<a href="#a4Popup" data-rel="popup" id="a4small" data-transition="pop" data-position-to="window"><img src="animals/a4small.jpeg"/></a>
				</div>
			</li>
			<li data-role="collapsible" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d">
		   		<h3>Cars</h3>
		   		<div class="picture-collection">
		   			<a href="#car1Popup" data-rel="popup" id="car1-small" data-transition="pop" data-position-to="window"><img src="cars/car1-small.jpeg"/></a>
		   			<a href="#car2Popup" data-rel="popup" id="car2-small" data-transition="pop" data-position-to="window"><img src="cars/car2-small.jpeg"/></a>
	 				<a href="#car3Popup" data-rel="popup" id="car3-small" data-transition="pop" data-position-to="window"><img src="cars/car3-small.jpeg"/></a>
	   				<a href="#car4Popup" data-rel="popup" id="car4-small" data-transition="pop" data-position-to="window"><img src="cars/car4-small.jpeg"/></a>
		   			<a href="#car5Popup" data-rel="popup" id="car5-small" data-transition="pop" data-position-to="window"><img src="cars/car5-small.jpeg"/></a>
		   			<a href="#car6Popup" data-rel="popup" id="car6-small" data-transition="pop" data-position-to="window"><img src="cars/car6-small.jpeg"/></a>
				</div>
			</li>
			<li data-role="collapsible" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d">
		   		<h3>Calvin and Hobbes</h3>
				<div class="picture-collection">
	   				<a href="#ch0Popup" data-rel="popup" id="ch0small" data-transition="pop" data-position-to="window"><img src="calvinandhobbes/ch0small.jpg"/></a>
		   			<a href="#ch1Popup" data-rel="popup" id="ch1small" data-transition="pop" data-position-to="window"><img src="calvinandhobbes/ch1small.jpg"/></a>
		   			<a href="#ch3Popup" data-rel="popup" id="ch3small" data-transition="pop" data-position-to="window"><img src="calvinandhobbes/ch3small.jpg"/></a>
		   			<a href="#ch7Popup" data-rel="popup" id="ch7small" data-transition="pop" data-position-to="window"><img src="calvinandhobbes/ch7small.jpg"/></a>
		  			<a href="#ch8Popup" data-rel="popup" id="ch8small" data-transition="pop" data-position-to="window"><img src="calvinandhobbes/ch8small.jpg"/></a>
				</div>
			</li>
			<li data-role="collapsible" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d">
		   		<h3>Design</h3>
		   		<div class="picture-collection">
		   			<a href="#design2Popup" data-rel="popup" id="design2small" data-transition="pop" data-position-to="window"><img src="design/design2small.jpg"/></a>
		   			<a href="#design4Popup" data-rel="popup" id="design4small" data-transition="pop" data-position-to="window"><img src="design/design4small.jpg"/></a>
	   				<a href="#design5Popup" data-rel="popup" id="design5small" data-transition="pop" data-position-to="window"><img src="design/design5small.jpg"/></a>
	   				<a href="#design6Popup" data-rel="popup" id="design6small" data-transition="pop" data-position-to="window"><img src="design/design6small.jpg"/></a>
		   			<a href="#design9Popup" data-rel="popup" id="design9small" data-transition="pop" data-position-to="window"><img src="design/design9small.jpg"/></a>
				</div>
			</li>
		</ul>		
		
								
			<div data-role="popup" id="a1Popup" class="popup-picture" data-theme="a">
				<a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-right">Close</a>
				<img src="animals/a1large.jpeg"/>
				<p class="caption">weirdanimals.tumblr.com</p>
			</div>				
			<div data-role="popup" id="a2Popup" class="popup-picture" data-theme="a">
				<a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-right">Close</a>
				<img src="animals/a2large.jpeg"/>
				<p class="caption">sleepinganimals.tumblr.com</p>
			</div>	
			<div data-role="popup" id="a3Popup" class="popup-picture" data-theme="a">
				<a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-right">Close</a>
				<img src="animals/a3large.jpeg"/>
				<p class="caption">cats.com</p>
			</div>				
			<div data-role="popup" id="a4Popup" class="popup-picture" data-theme="a">
				<a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-right">Close</a>
				<img src="animals/a4large.jpeg"/>
				<p class="caption">weirdanimals.tumblr.com</p>
			</div>
			<div data-role="popup" id="car1Popup" class="popup-picture" data-theme="a">
				<a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-right">Close</a>
				<img src="cars/car1-full.jpeg"/>
				<p class="caption">oldcars.blogspot.com</p>
			</div>			
			<div data-role="popup" id="car2Popup" class="popup-picture" data-theme="a">
				<a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-right">Close</a>
				<img src="cars/car2-full.jpeg"/>
				<p class="caption">oldcars.blogspot.com</p>
			</div>	
			<div data-role="popup" id="car3Popup" class="popup-picture" data-theme="a">
				<a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-right">Close</a>
				<img src="cars/car3-full.jpeg"/>
				<p class="caption">greenthings.tumblr.com</p>
			</div>	
			<div data-role="popup" id="car4Popup" class="popup-picture" data-theme="a">
				<a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-right">Close</a>
				<img src="cars/car4-full.jpeg"/>
				<p class="caption">carsilike.com</p>
			</div>	
			<div data-role="popup" id="car5Popup" class="popup-picture" data-theme="a">
				<a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-right">Close</a>
				<img src="cars/car5-full.jpeg"/>
				<p class="caption">oldcars.blogspot.com</p>
			</div>	
			<div data-role="popup" id="car6Popup" class="popup-picture" data-theme="a">
				<a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-right">Close</a>
				<img src="cars/car6-full.jpeg"/>
				<p class="caption">thingsiwishihad.tumblr.com</p>
			</div>	
			<div data-role="popup" id="ch0Popup" class="popup-picture" data-theme="a">
				<a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-right">Close</a>
				<img src="calvinandhobbes/ch0large.jpg"/>
				<p class="caption">calvinandhobbes.blogspot.com</p>
			</div>				
			<div data-role="popup" id="ch1Popup" class="popup-picture" data-theme="a">
				<a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-right">Close</a>
				<img src="calvinandhobbes/ch1large.jpg"/>
				<p class="caption">calvinandhobbes.blogspot.com</p>
			</div>	
			<div data-role="popup" id="ch3Popup" class="popup-picture" data-theme="a">
				<a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-right">Close</a>
				<img src="calvinandhobbes/ch3large.jpg"/>
				<p class="caption">hobbesistheking.tumblr.com</p>
			</div>				
			<div data-role="popup" id="ch7Popup" class="popup-picture" data-theme="a">
				<a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-right">Close</a>
				<img src="calvinandhobbes/ch7large.jpg"/>
				<p class="caption">calvinistheking.blogspot.com</p>
			</div>	
			<div data-role="popup" id="ch8Popup" class="popup-picture" data-theme="a">
				<a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-right">Close</a>
				<img src="calvinandhobbes/ch8large.jpg"/>
				<p class="caption">hobbesistheking.tumblr.com</p>
			</div>			
			<div data-role="popup" id="design2Popup" class="popup-picture" data-theme="a">
				<a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-right">Close</a>
				<img src="design/design2large.jpg"/>
				<p class="caption">weirdbuidlings.tumblr.com</p>
			</div>			
			<div data-role="popup" id="design4Popup" class="popup-picture" data-theme="a">
				<a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-right">Close</a>
				<img src="design/design4large.jpg"/>
				<p class="caption">goldengatebridge.blogspot.com</p>
			</div>	
			<div data-role="popup" id="design5Popup" class="popup-picture" data-theme="a">
				<a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-right">Close</a>
				<img src="design/design5large.jpg"/>
				<p class="caption">weirdbuidlings.tumblr.com</p>
			</div>	
			<div data-role="popup" id="design6Popup" class="popup-picture" data-theme="a">
				<a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-right">Close</a>
				<img src="design/design6large.jpg"/>
				<p class="caption">abstractdesign.com</p>
			</div>	
			<div data-role="popup" id="design9Popup" class="popup-picture" data-theme="a">
				<a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-right">Close</a>
				<img src="design/design9large.jpg"/>
				<p class="caption">weirdstatues.com</p>
			</div>	
			
			<div data-role="popup" id="adda1Popup" class="popup-content">
				<a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-right">Close</a>
				<h3>Add Blog</h3>
				<label for="blog-name">Enter blog name:</label>
				<input type="text" name="blog-name" id="blog-name" value="Cool Animals"/>
				<label for="blog-url">Enter blog url:</label>
				<input type="text" name="blog-url" id="blog-url" value="coolanimals.tumblr.com"/>
				<a href="#" data-rel="back" data-role="button" data-theme="b" data-icon="add">Add Blog</a>
			</div>
		</div>
			
	
	</div><!-- /content -->

    <div data-role="footer" data-id="samebar" class="nav-glyphish-example" data-position="fixed" data-tap-toggle="false">
		<div data-role="navbar" class="nav-glyphish-example" data-grid="c">
		<ul>
			<li><a href="myblogs.php" id="heart" data-icon="custom">My Blogs</a></li>
			<li><a href="discover.php" id="magnify" data-icon="custom" class="ui-btn-active">Discover</a></li>
			<li><a href="streamview.php" id="landscape" data-icon="custom" rel="external">Stream View</a></li>
			<li><a href="settings.php" id="gear" data-icon="custom">Settings</a></li>
		</ul>
		</div>
	</div>

</div><!-- /page -->

</body>
</html>