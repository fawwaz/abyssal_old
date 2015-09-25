<div id="main" class="content">
     <div class="story-container clearfix">
	 <?php foreach($data as $story) { ?>
        <div class="side">
            <div class="title">
                <h2><?php echo $story->title; ?></h2>
            </div>
            <div id="desc-home" class="story">
                <?php echo $story->story; ?>
        </div>
        </div>
        <img class="story-img" src="<?php echo base_url(); ?>/img/aboutus.JPG">
		<?php } ?>
	</div>
</div>