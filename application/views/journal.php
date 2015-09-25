
        <div id="journal-main" class="content">
        	<div class="left-side">
			<?php foreach($data as $blog) { ?>
            	<article class="art-box art trans-all">
                	<h3>
                    	<img src="<?php echo base_url(); ?>/img/<?php echo $blog->picture; ?>">
                        <a href="detailjournal.php"><span><?php echo $blog->title; ?></span></a>
                    </h3>
                    <div class="author"><?php echo $blog->author; ?><span> - <?php echo $blog->date; ?></span></div>
                    <div class="desc"><?php echo $blog->content; ?></div>
                    <a href="<?php echo base_url(); ?>detailjournal/getcontent/<?php echo $blog->id_blog; ?>" class="button button-blck button-red">read more</a>
                </article>
			<?php } ?>
            </div>
            <div class="right-side">
            	<div class="categ-container">
                	<h3>Categories</h3>
                    <ul>
					<?php foreach($data as $blog) { ?>
                    	<li><a><?php echo $blog->category; ?></a></li>
					<?php } ?>
                    </ul>
                </div>
                <div class="arcv-container">
                	<h3>Archieves</h3>
                    <ul>
					<?php foreach($data1 as $blog) { ?>
                    	<li><a href='<?php echo base_url(); ?>journal/bydate/<?php echo $blog->date1; ?>'><?php echo $blog->date1; ?></a></li>
					<?php } ?>
                    </ul>
                </div>
                <div class="tags-container">
                	<h3>Tags</h3>
                    <ul>
					<?php foreach($data3 as $tags) { ?>
                    	<li><a><?php echo $tags[0]->tag; ?></a></li>
					<?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    
