
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style2.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/cloud-zoom.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/jquery.fancybox-1.3.4.css" />
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.easing-1.3.pack.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.fancybox-1.3.4.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/cloud-zoom.1.0.2.js"></script>
<script>
$(function() {
				/*
				fancybox init on each cloud-zoom element
				 */
				$("#contenta .cloud-zoom").fancybox({
					'transitionIn'	:	'elastic',
					'transitionOut'	:	'none',
					'speedIn'		:	600,
					'speedOut'		:	200,
					'overlayShow'	:	true,
					'overlayColor'	:	'#000',
					'cyclic'		:	true,
					'easingIn'		:	'easeInOutExpo'
				});

				/*
				because the cloud zoom plugin draws a mousetrap
				div on top of the image, the fancybox click needs
				to be changed. What we do here is to trigger the click
				the fancybox expects, when we click the mousetrap div.
				We know the mousetrap div is inserted after
				the <a> we want to click:
				 */
				$("#contenta .mousetrap").live('click',function(){
					$(this).prev().trigger('click');
				});

				/*
				the content element;
				each list item / group with several images
				 */
				var $content	= $('#contenta'),
				$thumb_list = $content.find('.thumb > ul');
				/*
				we need to set the width of each ul (sum of the children width);
				we are also defining the click events on the right and left arrows
				of each item.
				 */
				$thumb_list.each(function(){
					var $this_list	= $(this),
					total_w		= 0,
					loaded		= 0,
					//preload all the images first
					$images		= $this_list.find('img'),
					total_images= $images.length;
					$images.each(function(){
						var $img	= $(this);
						$('<img/>').load(function(){
							++loaded;
							if (loaded == total_images){
								$this_list.data('current',0).children().each(function(){
									total_w	+= $(this).width();
								});
								$this_list.css('width', total_w + 'px');

								//next / prev events

								$this_list.parent()
								.siblings('.next')
								.bind('click',function(e){
									var current = $this_list.data('current');
									if(current == $this_list.children().length -1) return false;
									var	next	= ++current,
									ml		= -next * $this_list.children(':first').width();

									$this_list.data('current',next)
									.stop()
									.animate({
										'marginLeft'	: ml + 'px'
									},400);
									e.preventDefault();
								})
								.end()
								.siblings('.prev')
								.bind('click',function(e){
									var current = $this_list.data('current');
									if(current == 0) return false;
									var	prev	= --current,
									ml		= -prev * $this_list.children(':first').width();

									$this_list.data('current',prev)
									.stop()
									.animate({
										'marginLeft'	: ml + 'px'
									},400);
									e.preventDefault();
								});
							}
						}).attr('src',$img.attr('src'));
					});
				});
			});
</script>

        <div id="main" class="content">
            <div class="left-side">
            	<nav class="panel">
                	<ul>
                    	<li class="trans-all"><a href="<?php echo base_url(); ?>goods/browse/Wallet">wallet</a></li>
                        <li class="trans-all"><a href="<?php echo base_url(); ?>goods/browse/Bag">bag</a></li>
                        <li class="trans-all"><a href="<?php echo base_url(); ?>goods/browse/Belt">belt</a></li>
                        <li class="trans-all"><a href="<?php echo base_url(); ?>goods/browse/Camera Strap">camera strap</a></li>
                        <li class="trans-all"><a href="<?php echo base_url(); ?>goods/browse/Bracelet">bracelet</a></li>
                        <li class="trans-all"><a href="<?php echo base_url(); ?>goods/browse/Shoes">shoes</a></li>
                        <li class="trans-all"><a href="<?php echo base_url(); ?>goods/browse/Others">others</a></li>
                    </ul>
                </nav>
            </div>
            <div class="right-side" id="content">
			<?php foreach($data as $goods) { ?>
            	<div class="foto-container">
                	<div id="contenta" class="content clearfix">
                        <div class="item">
                            <div class="thumb_wrapper">
                                <div class="thumb">
                                    <ul>
                                        <li><a rev="group1" rel="zoomHeight:300, zoomWidth:300, adjustX: 10, adjustY:-4, position:'body'" class='cloud-zoom' href="<?php echo base_url(); ?>img/<?php echo $goods->image1;?>"><img src="<?php echo base_url(); ?>img/thumbs/<?php echo $goods->image1;?>" alt="Formstack 1"/></a></li>
                                        <li><a rev="group1" rel="zoomHeight:300, zoomWidth:300, adjustX: 10, adjustY:-4, position:'body'" class='cloud-zoom' href="<?php echo base_url(); ?>img/<?php echo $goods->image2;?>"><img src="<?php echo base_url(); ?>img/thumbs/<?php echo $goods->image2;?>" alt="Formstack 2"/></a></li>
                                        <li><a rev="group1" rel="zoomHeight:300, zoomWidth:300, adjustX: 10, adjustY:-4, position:'body'" class='cloud-zoom' href="<?php echo base_url(); ?>img/<?php echo $goods->image3;?>"><img src="<?php echo base_url(); ?>img/thumbs/<?php echo $goods->image3;?>" alt="Formstack 3"/></a></li>
                                    </ul>
                                </div>
                                <a class="prev" href="#"></a>
                                <a class="next" href="#"></a>
                                <span>Hover to zoom, click to view</span>
                            </div>
                        </div>        
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="detail-container">
                	<ul class="detail-box detail">
	                    <li><a><span class="title-desc"><?php echo $goods->title; ?></span></a></li>
                        <li><h3>Description :</h3></li>
                        <li><p><?php echo $goods->description; ?></p></li>
                        <li><h3>IDR <?php echo $goods->price; ?></h3></li>
                        <li>
                        	<h3>LIKE</h3>
                            <a class="button button-mid button-red" target="_blank" onClick="vote(<?php echo $id; ?>)">
                            Vote!
                            </a>
                        </li>
                        <li>
                        	<h3>SHARE</h3>
                            <a class="button button-mid button-tw" target="_blank" onClick="postToTweeter()">
                              Tweets!
                            </a>
                            <a class="button button-mid button-fb" target="_blank" onClick="postToFacebook()">
                              Shared!
                            </a>
                        </li>
                    </ul>
                </div>
			<?php } ?>
            </div>
        </div>
    </div>