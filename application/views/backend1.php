<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Simple YouTube Menu Effect</title>
		<meta name="description" content="A tutorial on how to recreate the effect of YouTube's little left side menu. The idea is to slide a little menu icon to the right side while revealing some menu item list beneath. " />
		<meta name="keywords" content="Add keywords" />
		<meta name="author" content="_yourName_ for Codrops" />
		<link rel="shortcut icon" href="../favicon.ico"> 
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/css/default.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/css/component.css" />
		<script src="<?php echo base_url(); ?>/js/modernizr.custom.js"></script>
	</head>
	<body>
		<div class="container">	
			<!-- Codrops top bar -->
			<div class="main">
				<p>This menu is inspired by the left side menu found on YouTube. When clicking on the menu label and icon, the main menu appears beneath and the menu icon slides to the right side while the label slides up. To close the menu, the menu icon needs to be clicked again.</p>
				<div class="side">
					<nav class="dr-menu">
						<div class="dr-trigger"><span class="dr-icon dr-icon-menu"></span><a class="dr-label">Account</a></div>
						<ul>
							<li><a class="dr-icon dr-icon-user" href="#">Jason Quinn</a></li>
							<li><a class="dr-icon dr-icon-camera" href="#">Videos</a></li>
							<li><a class="dr-icon dr-icon-heart" href="#">Favorites</a></li>
							<li><a class="dr-icon dr-icon-bullhorn" href="#">Subscriptions</a></li>
							<li><a class="dr-icon dr-icon-download" href="#">Downloads</a></li>
							<li><a class="dr-icon dr-icon-settings" href="#">Settings</a></li>
							<li><a class="dr-icon dr-icon-switch" href="#">Logout</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div><!-- /container -->
		<script src="js/ytmenu.js"></script>
	</body>
</html>