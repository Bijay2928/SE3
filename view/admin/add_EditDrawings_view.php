
<section class="right">
	<h2>Add New Drawing</h2>
	<form action="" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?php if(isset($_GET['daid']))echo $drawing_detail['id'];?>"><!--id form drawing table -->
		<label>Select Auction Location: </label>
		<select name="auction_id" ><!-- auction_id from drawing table-->
		<?php 
			foreach($cat_details as $row)
		echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';//name from drawing table
		 ?>
		</select> 
		<label>Name</label>
		<input type="text" name="name" value=" <?php if(isset($_GET['daid']))echo $drawing_detail['name']; ?>"> <!--name from drawing table -->

		<label>Price</label>
		<input type="text" name="price" value="<?php if(isset($_GET['daid']))echo $drawing_detail['price']; ?>"> <!--price form drawing table -->

		<label>Dimention in cm</label>
		<input type="text" name="dimention" value="<?php if(isset($_GET['daid']))echo $drawing_detail['dimention']; ?>"> <!--dimention from drawing table -->


		<label>Description</label>
		<textarea name="description"> <?php if(isset($_GET['daid']))echo $drawing_detail['description']; ?></textarea><!--description from drawing table -->

		<label>Medium Used</label>
		<select name="medium"> value=" <?php if(isset($_GET['daid']))echo $drawing_detail['medium']; ?>"> <!--medium from drawing table -->
			<option value="Typically">Typically</option>
			<option value="pencil">pencil</option>
			<option value="ink">ink</option>
			<option value="charcoal">charcoal</option>
			<option value="other">Other</option>
		</select>

		<label>Framing</label>
		<select name="frame"> value=" <?php if(isset($_GET['daid']))echo $drawing_detail['frame']; ?>"> <!--frame from drawing table -->
			<option value="yes">yes</option><!-- option value for frame-->
			<option value="no">no</option>
			</select>

		<label>Display</label>
		<select name="status" value=" <?php if(isset($_GET['daid']))echo $drawing_detail['status']; ?>"> <!--status form drawing table -->
			<option value="1">Active</option>
			<option value="0">Sold</option>
		</select>
<?php
		if (isset($_GET['daid'])) {
			if (file_exists('../../images/furniture/' . $drawing_detail['id'] . '.jpg')) {
						echo '<img style="width: 200px; clear: both" src="../../images/furniture/' . $drawing_detail['id'] . '.jpg" />';//image location
					}}
				?>
		<label>Image</label>
				<input type="file" name="img" /> <br> <br>

		<input type="submit" name="addDrawing" value="SUBMIT"><!--submit button -->
	</form>
</section>