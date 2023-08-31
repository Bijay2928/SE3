
<section class="right">
	<h2>Add New Paintings</h2>
	<form action="" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?php if(isset($_GET['fid']))echo $furniture_detail['id'];?>">
		<label>Select Auction Location: </label>
		<select name="name" >
		<?php 
			foreach($cat_details as $row)
		echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
		 ?>
		</select> 
		<label>Name</label>
		<input type="text" name="painting_name" value=" <?php if(isset($_GET['fid']))echo $furniture_detail['painting_name']; ?>"> 

		<label>Price</label>
		<input type="text" name="price" value="<?php if(isset($_GET['fid']))echo $furniture_detail['price']; ?>"> 


		<label>Description</label>
		<textarea name="details"> <?php if(isset($_GET['fid']))echo $furniture_detail['details']; ?></textarea>

		<label>Medium Used</label>
		<select name="type"> value=" <?php if(isset($_GET['fid']))echo $furniture_detail['type']; ?>"> 
			<option value="typically">Typically</option>
			<option value="oil">oil</option>
			<option value="acrylic">acrylic</option>
			<option value="watercolor">watercolor</option>
			<option value="other">Other</option>
		</select>
		<label>frame</label>
		<select name="frame"> value=" <?php if(isset($_GET['fid']))echo $furniture_detail['frame']; ?>"> 
			<option value="yes">yes</option>
			<option value="no">no</option>
			</select>

		<label>Display</label>
		<select name="status" value=" <?php if(isset($_GET['fid']))echo $furniture_detail['status']; ?>"> 
			<option value="1">Active</option>
			<option value="0">Sold</option>
		</select>
<?php
		if (isset($_GET['fid'])) {
			if (file_exists('../../images/furniture/' . $furniture_detail['id'] . '.jpg')) {
						echo '<img style="width: 200px; clear: both" src="../../images/furniture/' . $furniture_detail['id'] . '.jpg" />';
					}}
				?>
		<label>Image</label>
				<input type="file" name="img" /> <br> <br>

		<input type="submit" name="addFurniture" value="SUBMIT">
	</form>
</section>