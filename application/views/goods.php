
        <script type="text/javascript" src="<?php echo base_url(); ?>/js/jquery.quick.pagination.min.js"></script>
        <script>
        $(document).ready(function() {
            $("#pagination").quickPagination({pageSize:"8"});
        });
        </script>
        <div id="load"><div id="loading"></div></div>
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
            	<nav class="item-container">
                	<ul class="pagination" id="pagination">
					<?php foreach($data as $goods) { ?>
                    	<li class="item-box item-list trans-all">
                        	<a href="<?php echo base_url(); ?>goods/detail/<?php echo $goods->id_goods; ?>">
                            	<span><?php echo $goods->title; ?><br>IDR <?php echo $goods->price; ?></span>
                            	<img class="dummy" src="<?php echo base_url(); ?>/img/<?php echo $goods->image1; ?>">                           
                            </a>
                        </li>
                       <?php } ?>
                    </ul>
                    
                </nav>
            </div>
            <div class="clearfix"></div>
        </div>