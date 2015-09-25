	<h3 class="title">Add New Goods</h3>
	<?php echo form_open_multipart('backend/do_add');?>
	<div class="input-wrap">
		<input type="hidden" name="id_goods"/>
		<input type="text" placeholder="Goods Name" name="title">
	</div>
	<div class="input-wrap">
	<textarea placeholder="Description" name="description"></textarea>
	</div>
	<div class="input-wrap">
	<input type="text" placeholder="Price" name="price">
	</div>
	<div class="input-wrap">
	<input type="hidden" name="hidden_image1"/>
	<label>Upload Thumbnail Foto :</label><input type="file" class="custom-file-input" name="image1">
	</div>
	<div class="input-wrap">
	<input type="hidden" name="hidden_image2"/>
	<label>Upload Foto sisi ke-2 :</label><input type="file" class="custom-file-input" name="image2">
	</div>
	<div class="input-wrap">
	<input type="hidden" name="hidden_image3"/>
	<label>Upload Foto sisi ke-3 :</label><input type="file" class="custom-file-input" name="image3">
	</div>
	<div class="input-wrap">
	<input type="submit" class="button button-mid button-red" class="custom-file-input">
	</div>
	
	
	</div>
	</form>
	<div class="clearfix"></div>
</div>
</body>
</html>