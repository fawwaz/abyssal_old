<html>
<head>
<title>Abyssal & Pelagic</title>
<link type="text/css" rel="stylesheet" href="css/main.css" >
<script type="text/javascript" src="<?php echo base_url(); ?>/js/main.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/js/jquery-latest.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/js/jquery-min 1.8.3.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/js/jquery-ui.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/common.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700' rel='stylesheet' type='text/css' />
<script type="text/javascript" src="<?php echo base_url(); ?>js/modernizr.custom.79639.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>/js/prefixfree.min.js"></script>
<script>
$(document).ready(function() {
    $('.viewport').hover(function() { $(this).children('a').children('img').animate({ height: '363', left: '0', top: '0', width: '242' }, 100);
        $(this).children('a').children('span').fadeIn(300); }, function() {        $(this).children('a').children('img').animate({ height: '396', left: '-20', top: '-20', width: '264'}, 100);
        $(this).children('a').children('span').fadeOut(300);});
});
</script>
</head>
<body>
	<div class="wrapper">
    	<header>
        	<a class="logo-img-container trans-all" href="<?php echo base_url(); ?>home">
            	<img src="<?php echo base_url(); ?>img/logo.png">
            </a>
        </header>
        <hr class="sexy_line">
        <div id="main" class="content">
        	<form class="form-2" method="POST" action="<?php echo base_url() ?>admin/login">
                <input type="text" placeholder="username" name='name' class="input-blck">
                <input type="text" placeholder="password" name='email' class="input-blck">
                <input type="submit" value="send" class="button button-mid button-red">
            </form>
        </div>
    </div>
    <footer class="footer-box footer-container">
	</footer>
</body>
</html>
