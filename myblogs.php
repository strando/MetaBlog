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
	<link rel="apple-touch-startup-image" href="startup.png">

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
		
		<div data-role="fieldcontain">

			
			<!-- on screen collapsibles -->

			<div data-role="collapsible" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d">
		   		<h3>PushTheMovement</h3>
		   		<div class="picture-collection">
		   			<a href="#p1Popup" data-rel="popup" id="p1small" data-transition="pop" data-position-to="window"><img src="pushthemovement/p1small.jpg"/></a>
		   			<a href="#p2Popup" data-rel="popup" id="p2small" data-transition="pop" data-position-to="window"><img src="pushthemovement/p2small.jpg"/></a>
		   			<a href="#p3Popup" data-rel="popup" id="p3small" data-transition="pop" data-position-to="window"><img src="pushthemovement/p3small.jpg"/></a>
		   			<a href="#p4Popup" data-rel="popup" id="p4small" data-transition="pop" data-position-to="window"><img src="pushthemovement/p4small.jpg"/></a>
		   			<a href="#p5Popup" data-rel="popup" id="p5small" data-transition="pop" data-position-to="window"><img src="pushthemovement/p5small.jpg"/></a>
		   			<a href="#p6Popup" data-rel="popup" id="p6small" data-transition="pop" data-position-to="window"><img src="pushthemovement/p6small.jpg"/></a>
		   			<a href="#p7Popup" data-rel="popup" id="p7small" data-transition="pop" data-position-to="window"><img src="pushthemovement/p7small.jpg"/></a>
		   			<a href="#p8Popup" data-rel="popup" id="p8small" data-transition="pop" data-position-to="window"><img src="pushthemovement/p8small.png"/></a>
				</div>
			</div>					
			<div data-role="popup" id="p1Popup" class="popup-picture" data-theme="a">
				<a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-right">Close</a>
				<img src="pushthemovement/p1large.jpg"/>
			</div>				
			<div data-role="popup" id="p2Popup" class="popup-picture" data-theme="a">
				<a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-right">Close</a>
				<img src="pushthemovement/p2large.jpg"/>
			</div>	
			<div data-role="popup" id="p3Popup" class="popup-picture" data-theme="a">
				<a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-right">Close</a>
				<img src="pushthemovement/p3large.jpg"/>
			</div>				
			<div data-role="popup" id="p4Popup" class="popup-picture" data-theme="a">
				<a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-right">Close</a>
				<img src="pushthemovement/p4large.jpg"/>
			</div>	
			<div data-role="popup" id="p5Popup" class="popup-picture" data-theme="a">
				<a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-right">Close</a>
				<img src="pushthemovement/p5large.jpg"/>
			</div>	
			<div data-role="popup" id="p6Popup" class="popup-picture" data-theme="a">
				<a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-right">Close</a>
				<img src="pushthemovement/p6large.jpg"/>
			</div>	
			<div data-role="popup" id="p7Popup" class="popup-picture" data-theme="a">
				<a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-right">Close</a>
				<img src="pushthemovement/p7large.jpg"/>
			</div>	
			<div data-role="popup" id="p8Popup" class="popup-picture" data-theme="a">
				<a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-right">Close</a>
				<img src="pushthemovement/p8large.png"/>
			</div>	
			
			<div data-role="collapsible" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d">
		   		<h3>EverythingYouLoveToHate</h3>
		   		<div class="picture-collection">
		   			<a href="#e1Popup" data-rel="popup" id="e1small" data-transition="pop" data-position-to="window"><img src="everythingyoulovetohate/e1small.jpg"/></a>
		   			<a href="#e2Popup" data-rel="popup" id="e2small" data-transition="pop" data-position-to="window"><img src="everythingyoulovetohate/e2small.jpeg"/></a>
		   			<a href="#e3Popup" data-rel="popup" id="e3small" data-transition="pop" data-position-to="window"><img src="everythingyoulovetohate/e3small.jpg"/></a>
		   			<a href="#e4Popup" data-rel="popup" id="e4small" data-transition="pop" data-position-to="window"><img src="everythingyoulovetohate/e4small.jpeg"/></a>
		   			<a href="#e5Popup" data-rel="popup" id="e5small" data-transition="pop" data-position-to="window"><img src="everythingyoulovetohate/e5small.jpg"/></a>
		   			<a href="#e6Popup" data-rel="popup" id="e6small" data-transition="pop" data-position-to="window"><img src="everythingyoulovetohate/e6small.jpeg"/></a>
		   			<a href="#e7Popup" data-rel="popup" id="e7small" data-transition="pop" data-position-to="window"><img src="everythingyoulovetohate/e7small.jpg"/></a>
				</div>
			</div>					
			<div data-role="popup" id="e1Popup" class="popup-picture" data-theme="a">
				<a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-right">Close</a>
				<img src="everythingyoulovetohate/e1large.jpg"/>
			</div>				
			<div data-role="popup" id="e2Popup" class="popup-picture" data-theme="a">
				<a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-right">Close</a>
				<img src="everythingyoulovetohate/e2large.jpg"/>
			</div>	
			<div data-role="popup" id="e3Popup" class="popup-picture" data-theme="a">
				<a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-right">Close</a>
				<img src="everythingyoulovetohate/e3large.jpg"/>
			</div>				
			<div data-role="popup" id="e4Popup" class="popup-picture" data-theme="a">
				<a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-right">Close</a>
				<img src="everythingyoulovetohate/e4large.jpg"/>
			</div>	
			<div data-role="popup" id="e5Popup" class="popup-picture" data-theme="a">
				<a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-right">Close</a>
				<img src="everythingyoulovetohate/e5large.jpg"/>
			</div>	
			<div data-role="popup" id="e6Popup" class="popup-picture" data-theme="a">
				<a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-right">Close</a>
				<img src="everythingyoulovetohate/e6large.jpg"/>
			</div>	
			<div data-role="popup" id="e7Popup" class="popup-picture" data-theme="a">
				<a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-right">Close</a>
				<img src="everythingyoulovetohate/e7large.jpg"/>
			</div>		
						
			<div data-role="collapsible" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d">
		   		<h3>TheBigPicture</h3>
		   		<div class="picture-collection">
		   			<a href="#bigpic1Popup" data-rel="popup" id="bigpic1small" data-transition="pop" data-position-to="window"><img src="thebigpicture/bigpic1small.jpeg"/></a>
		   			<a href="#bigpic2Popup" data-rel="popup" id="bigpic2small" data-transition="pop" data-position-to="window"><img src="thebigpicture/bigpic2small.jpeg"/></a>
		   			<a href="#bigpic3Popup" data-rel="popup" id="bigpic3small" data-transition="pop" data-position-to="window"><img src="thebigpicture/bigpic3small.jpeg"/></a>
		   			<a href="#bigpic4Popup" data-rel="popup" id="bigpic4small" data-transition="pop" data-position-to="window"><img src="thebigpicture/bigpic4small.jpeg"/></a>
		   			<a href="#bigpic5Popup" data-rel="popup" id="bigpic5small" data-transition="pop" data-position-to="window"><img src="thebigpicture/bigpic5small.jpeg"/></a>
				</div>
			</div>					
			<div data-role="popup" id="bigpic1Popup" class="popup-picture" data-theme="a">
				<a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-right">Close</a>
				<img src="thebigpicture/bigpic1large.jpeg"/>
			</div>				
			<div data-role="popup" id="bigpic2Popup" class="popup-picture" data-theme="a">
				<a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-right">Close</a>
				<img src="thebigpicture/bigpic2large.jpeg"/>
			</div>				
			<div data-role="popup" id="bigpic3Popup" class="popup-picture" data-theme="a">
				<a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-right">Close</a>
				<img src="thebigpicture/bigpic3large.jpeg"/>
			</div>				
			<div data-role="popup" id="bigpic4Popup" class="popup-picture" data-theme="a">
				<a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-right">Close</a>
				<img src="thebigpicture/bigpic4large.jpeg"/>
			</div>				
			<div data-role="popup" id="bigpic5Popup" class="popup-picture" data-theme="a">
				<a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-right">Close</a>
				<img src="thebigpicture/bigpic5large.jpeg"/>
			</div>	

		</div>
					
	</div><!-- /content -->

   
    <div data-role="footer" data-id="samebar" class="nav-glyphish-example" data-position="fixed" data-tap-toggle="false">
		<div data-role="navbar" class="nav-glyphish-example" data-grid="c">
		<ul>
			<li><a href="myblogs.php" id="heart" data-icon="custom" class="ui-btn-active">My Blogs</a></li>
			<li><a href="discover.php" id="magnify" data-icon="custom">Discover</a></li>
			<li><a href="streamview.php" id="landscape" data-icon="custom" data-ajax="false">Stream View</a></li>
			<li><a href="settings.php" id="gear" data-icon="custom">Settings</a></li>
		</ul>
		</div>
	</div>

</div><!-- /page -->

</body>
</html>