	<?php echo form_open("backend/view_goods"); ?>
	<div class="input-group">
		Select Category :
		<select name="category">
			<?php
				foreach($category as $row){
					?>
						<option value="<?php echo $row->category; ?>"><?php echo $row->category; ?></option>
					<?php
				}
			?>
		</select>
		<input type="submit" value="go"/>
	</div>
	<?php echo form_close(); ?>
	<table class="overflow-y">
					<thead>
						<tr>
							<th>No.</th><th>Title</th><th>Price</th><th>Category</th><th>Thumbnail 1</th><th>Thumbnail 2</th><th>Thumbnail 3</th><th>Like</th><th>FB</th><th>Twitter</th><th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
							foreach($goods as $row){
						?>
						<tr>
							<th><?php echo $row->id_goods; ?></th>
							<td><?php echo $row->title; ?></td>
							<td><?php echo $row->price; ?></td>
							<td><?php echo $row->category; ?></td>
							<td><img class="backend-thumb" src="<?php echo base_url(); ?>/img/<?php echo $row->image1; ?>"></td>
							<td><img class="backend-thumb" src="<?php echo base_url(); ?>/img/<?php echo $row->image2; ?>"></td>
							<td><img class="backend-thumb" src="<?php echo base_url(); ?>/img/<?php echo $row->image3; ?>"></td>
							<td><?php echo $row->vote; ?></td>
							<td><?php echo $row->facebook; ?></td>
							<td><?php echo $row->tweeter; ?></td>
							<td><a href="<?php echo base_url(); ?>/backend/edit_goods/<?php echo $row->id_goods; ?>">Edit</a> | <a href="<?php echo base_url(); ?>/backend/delete_goods/<?php echo $row->id_goods; ?>">Delete</a></td>
						</tr>
						<?php
							}
						?>
					</tbody>
				</table>


	</div>
	<div class="clearfix"></div>
</div>
</body>
</html>