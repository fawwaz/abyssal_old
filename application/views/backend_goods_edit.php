	<h3 class="title">Edit New Goods</h3>
	<h3><?php echo $error; ?>, <?php echo $error_img1; ?>, <?php echo $error_img2; ?>, <?php echo $error_img3; ?></h3>
	<?php echo form_open_multipart('backend/do_edit');?>
	<?php foreach($goods as $row){ ?>
	<div class="input-wrap">
		<input type="hidden" value="<?php echo $row->id_goods; ?>" name="id_goods"/>
		<input type="text" placeholder="Goods Name" value="<?php echo $row->title; ?>" name="title">
	</div>
	<div class="input-wrap">
	<textarea placeholder="Description" name="description"><?php echo $row->description; ?></textarea>
	</div>
	<div class="input-wrap">
	<input type="text" placeholder="Price" value="<?php echo $row->price; ?>" name="price">
	</div>
	<div class="input-wrap">
	<input type="hidden" value="<?php echo $row->image1; ?>" name="hidden_image1"/>
	<label>Upload Thumbnail Foto :</label><input type="file" class="custom-file-input" name="image1">
	</div>
	<div class="input-wrap">
	<input type="hidden" value="<?php echo $row->image2; ?>" name="hidden_image2"/>
	<label>Upload Foto sisi ke-2 :</label><input type="file" class="custom-file-input" name="image2">
	</div>
	<div class="input-wrap">
	<input type="hidden" value="<?php echo $row->image3; ?>" name="hidden_image3"/>
	<label>Upload Foto sisi ke-3 :</label><input type="file" class="custom-file-input" name="image3">
	</div>
	<div class="input-wrap">
	<input type="submit" class="button button-mid button-red" class="custom-file-input">
	</div>
	<?php } ?>
	
	
	</div>
	</form>
	<div class="clearfix"></div>
</div>
</body>
</html>