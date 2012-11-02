<!DOCTYPE html> 
<html>

<head>
	<title>MetaBlog | Stream View</title> 
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
	
<div data-role="page" id="one">  

	<div data-role="header" data-position="fixed">
		<a href="login.php" data-icon="check" id="logout" class="ui-btn-left">Logout</a>

		<h1>Stream View</h1>
		
		<a href="#create-filter-popup" data-rel="popup" data-icon="plus" data-transition="pop" data-position-to="window" class="add-button">Filter</a>		

		</div><!-- /header -->

	<div data-role="content">		
		<h3>Select Filter:</h3>
		<p><a href="#filter1" data-role="button">All Blogs</a></p>	
		<p><a href="#filter2" data-role="button">Special Filter</a></p>	
	</div><!-- /content -->
	
	<div data-role="footer" data-id="samebar" class="nav-glyphish-example" data-position="fixed" data-tap-toggle="false">
		<div data-role="navbar" class="nav-glyphish-example" data-grid="c">
		<ul>
			<li><a href="myblogs.php" id="heart" data-icon="custom">My Blogs</a></li>
			<li><a href="discover.php" id="magnify" data-icon="custom">Discover</a></li>
			<li><a href="streamview.php" id="landscape" data-icon="custom" class="ui-btn-active" rel="external">Stream View</a></li>
			<li><a href="settings.php" id="gear" data-icon="custom">Settings</a></li>
		</ul>
		</div>
	</div>
	
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

</div><!-- /page one -->


<!-- Start of second page: #two -->
<div data-role="page" id="filter1" data-add-back-btn="true">

	<div data-role="header" data-position="fixed">
		<h1>All Blogs</h1>		
		<a href="#edit-all-filter-popup" data-rel="popup" data-transition="pop" data-position-to="window" class="ui-btn-right">Edit Filter</a>		
	</div><!-- /header -->

	<div data-role="content">	
		<p class="listofblogs"><i>PushTheMovement + EverythingYouLoveToHate + TheBigPicture</i><p>		
		<div data-role="fieldcontain" class="streamviewfield">		
			<img src="pushthemovement/p1large.jpg"/>
			<img src="everythingyoulovetohate/e1large.jpg"/>
			<img src="thebigpicture/bigpic1large.jpeg"/>
			<img src="pushthemovement/p2large.jpg"/>
			<img src="pushthemovement/p3large.jpg"/>
			<img src="everythingyoulovetohate/e2large.jpg"/>
			<img src="thebigpicture/bigpic2large.jpeg"/>
			<img src="thebigpicture/bigpic3large.jpeg"/>
			<img src="everythingyoulovetohate/e3large.jpg"/>
			<img src="everythingyoulovetohate/e4large.jpg"/>
			<img src="pushthemovement/p4large.jpg"/>
			<img src="everythingyoulovetohate/e5large.jpg"/>
			<img src="pushthemovement/p5large.jpg"/>
			<img src="pushthemovement/p6large.jpg"/>
			<img src="pushthemovement/p7large.jpg"/>
			<img src="thebigpicture/bigpic4large.jpeg"/>
			<img src="everythingyoulovetohate/e6large.jpg"/>
			<img src="everythingyoulovetohate/e7large.jpg"/>			
			<img src="pushthemovement/p8large.png"/>
			<img src="thebigpicture/bigpic5large.jpeg"/> 		
		</div>				
	</div><!-- /content -->
	
	<div data-role="footer" data-id="samebar" class="nav-glyphish-example" data-position="fixed" data-tap-toggle="false">
		<div data-role="navbar" class="nav-glyphish-example" data-grid="c">
		<ul>
			<li><a href="myblogs.php" id="heart" data-icon="custom">My Blogs</a></li>
			<li><a href="discover.php" id="magnify" data-icon="custom">Discover</a></li>
			<li><a href="streamview.php" id="landscape" data-icon="custom" class="ui-btn-active" rel="external">Stream View</a></li>
			<li><a href="settings.php" id="gear" data-icon="custom">Settings</a></li>
		</ul>
		</div>
	</div>
	
	<div data-role="popup" id="edit-all-filter-popup" class="popup-content">
				<a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-right">Close</a>
				<h2>Create Filter</h2>
				<label for="blog-name">Filter name:</label>
				<input type="text" name="filter-name" id="filter-name" value="All Blogs"/>
				<p>Select blogs to include:</p>
				<div class="blog-list-small">
					<label><input type="checkbox" name="pushthemovement" checked="true"/> Push The Movement </label>
					<label><input type="checkbox" name="everythingyoulovetohate" checked="true"/> Everything You Love To Hate </label>
					<label><input type="checkbox" name="thebigpicture" checked="true"/> The Big Picture </label>
				</div>
				<a href="#" data-rel="back" data-role="button" data-theme="b">Edit</a>
			</div>
			
</div>


</div><!-- /page two -->

<!-- Start of second page: #three -->
<div data-role="page" id="filter2" data-add-back-btn="true">

	<div data-role="header" data-position="fixed">
		<h1>Special Filter</h1>
		
		<a href="#edit-2-filter-popup" data-rel="popup" data-transition="pop" data-position-to="window" class="ui-btn-right">Edit Filter</a>		

	</div><!-- /header -->

	<div data-role="content">	
		<p class="listofblogs"><i>PushTheMovement + TheBigPicture</i><p>
		
		<div data-role="fieldcontain" class="streamviewfield">
		
			<img src="pushthemovement/p1large.jpg"/>
			<img src="thebigpicture/bigpic1large.jpeg"/>
			<img src="pushthemovement/p2large.jpg"/>
			<img src="pushthemovement/p3large.jpg"/>
			<img src="thebigpicture/bigpic2large.jpeg"/>
			<img src="thebigpicture/bigpic3large.jpeg"/>
			<img src="pushthemovement/p4large.jpg"/>
			<img src="pushthemovement/p5large.jpg"/>
			<img src="pushthemovement/p6large.jpg"/>
			<img src="pushthemovement/p7large.jpg"/>
			<img src="thebigpicture/bigpic4large.jpeg"/>
			<img src="pushthemovement/p8large.png"/>
			<img src="thebigpicture/bigpic5large.jpeg"/> 
			
		</div>

		
	</div><!-- /content -->
	
	<div data-role="footer" data-id="samebar" class="nav-glyphish-example" data-position="fixed" data-tap-toggle="false">
		<div data-role="navbar" class="nav-glyphish-example" data-grid="c">
		<ul>
			<li><a href="myblogs.php" id="heart" data-icon="custom">My Blogs</a></li>
			<li><a href="discover.php" id="magnify" data-icon="custom">Discover</a></li>
			<li><a href="streamview.php" id="landscape" data-icon="custom" class="ui-btn-active" rel="external">Stream View</a></li>
			<li><a href="settings.php" id="gear" data-icon="custom">Settings</a></li>
		</ul>
		</div>
	</div>
	
	<div data-role="popup" id="edit-2-filter-popup" class="popup-content">
		<a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-right">Close</a>
		<h2>Create Filter</h2>
		<label for="blog-name">Enter filter name:</label>
		<input type="text" name="filter-name" id="filter-name" value="Special Filter"/>
		<p>Select blogs to include:</p>
		<div class="blog-list-small">
			<label><input type="checkbox" name="pushthemovement" checked="true"/> Push The Movement </label>
			<label><input type="checkbox" name="everythingyoulovetohate"/> Everything You Love To Hate </label>
			<label><input type="checkbox" name="thebigpicture" checked="true"/> The Big Picture </label>
		</div>
		<a href="#" data-rel="back" data-role="button" data-theme="b" >Edit</a>
	</div>
</div>

</body>
</html>