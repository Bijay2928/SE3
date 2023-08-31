
<section class="right">
	<h2>Add New Photograph</h2>
	<form action="" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?php if(isset($_GET['pid']))echo $photograph_detail['id'];?>"><!--id form photograph table -->
		<label>Select Auction Location: </label>
		<select name="auction_id" ><!--auction id form photograph  -->
		<?php 
			foreach($cat_details as $row)
		echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';//name fform photograph image
		 ?>
		</select> 
		<label>Name</label>
		<input type="text" name="name" value=" <?php if(isset($_GET['pid']))echo $photograph_detail['name']; ?>"><!--name from photograph file -->

		<label>Price</label>
		<input type="text" name="price" value="<?php if(isset($_GET['pid']))echo $photograph_detail['price']; ?>"> <!--price form photograph file -->

		<label>Dimention</label>
		<input type="text" name="dimention" value="<?php if(isset($_GET['pid']))echo $photograph_detail['dimention']; ?>"> <!--dimention from photograph file -->


		<label>Description</label>
		<textarea name="description"> <?php if(isset($_GET['pid']))echo $photograph_detail['description']; ?></textarea><!--description fromm photograph file -->

		<label>Image tpe</label>
		<select name="type"> value=" <?php if(isset($_GET['pid']))echo $photograph_detail['type']; ?>"> <!-- type fro, photograph file-->
			<option value="colorful">colorful</option>
			<option value="black and white">black and white</option><!--option value -->
		</select>

		<label>Display</label>
		<select name="status" value=" <?php if(isset($_GET['pid']))echo $photograph_detail['status']; ?>"> <!-- status from photogrph file-->
			<option value="1">Active</option>
			<option value="0">Sold</option>
		</select>
<?php
		if (isset($_GET['pid'])) {
			if (file_exists('../../images/furniture/' . $photograph_detail['id'] . '.jpg')) {
						echo '<img style="width: 200px; clear: both" src="../../images/furniture/' . $photograph_detail['id'] . '.jpg" />';//locaiton
					}}
				?>
		<label>Image</label>
				<input type="file" name="img" /> <br> <br>

		<input type="submit" name="addPhoto" value="SUBMIT"><!-- submit button-->
	</form>
</section>