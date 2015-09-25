<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Abyssal & Pelagic</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/default.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/component.css" />
		<script src="<?php echo base_url(); ?>js/modernizr.custom.js"></script>
	</head>
	<body class="spmenu-push">
		<nav class="spmenu spmenu-vertical spmenu-left" id="spmenu-s1">
			<h3>Abyssal & Pelagic</h3>
            <ul class="menu">
                <li><a href="#">Home</a></li>
                <li><a href="#">Goods</a>
                	<ul>
                    	<li>All Goods</li>
                        <li>Add New</li>
                    </ul>
                </li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Story</a></li>
                <li><a>Blogs</a>
                	<ul>
                    	<li>All Posts</li>
                        <li>Add New</li>
                        <li>Categories</li>                        
                        <li>Tags</li>
                    </ul>
                </li>
                <li><a>Settings</a>
                	<ul>
                    	<li>Manage Admin</li>
                        <li>Password</li>
                    </ul>
                </li>
                <li><a>Log Out</a></li>
			</ul>
		</nav>
		<div class="container">
			<header class="clearfix">
				
			</header>
			<div class="main">
				<section class="buttonset">
					<a id="showLeftPush">Menu</a>
				</section>
			</div>
		</div>
		<!-- Classie - class helper functions by @desandro https://github.com/desandro/classie -->
		<script src="<?php echo base_url(); ?>js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;

		
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'spmenu-push-toright' );
				classie.toggle( menuLeft, 'spmenu-open' );
				disableOther( 'showLeftPush' );
			};

			function disableOther( button ) {
				if( button !== 'showLeft' ) {
					classie.toggle( showLeft, 'disabled' );
				}
				if( button !== 'showRight' ) {
					classie.toggle( showRight, 'disabled' );
				}
				if( button !== 'showTop' ) {
					classie.toggle( showTop, 'disabled' );
				}
				if( button !== 'showBottom' ) {
					classie.toggle( showBottom, 'disabled' );
				}
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
				if( button !== 'showRightPush' ) {
					classie.toggle( showRightPush, 'disabled' );
				}
			}
		</script>
	</body>
</html>
