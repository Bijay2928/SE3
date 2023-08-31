
<section class="right">
	<h2>Add New Sculpture</h2>
	<form action="" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?php if(isset($_GET['scid']))echo $sculpture_detail['id'];?>">
		<label>Select Auction Location: </label>
		<select name="auction_id" >
		<?php 
			foreach($cat_details as $row)
		echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
		 ?>
		</select> 
		<label>Name</label>
		<input type="text" name="name" value=" <?php if(isset($_GET['scid']))echo $sculpture_detail['name']; ?>"> 

		<label>Price</label>
		<input type="text" name="price" value="<?php if(isset($_GET['scid']))echo $sculpture_detail['price']; ?>"> 

		<label>Dimention in cm</label>
		<input type="text" name="dimention" value="<?php if(isset($_GET['scid']))echo $sculpture_detail['dimention']; ?>"> 

		<label>weight in kg</label>
		<input type="text" name="weight" value="<?php if(isset($_GET['scid']))echo $sculpture_detail['weight']; ?>"> 


		<label>Description</label>
		<textarea name="description"> <?php if(isset($_GET['scid']))echo $sculpture_detail['description']; ?></textarea>

		<label>Medium Used</label>
		<select name="material"> value=" <?php if(isset($_GET['scid']))echo $sculpture_detail['material']; ?>"> 
			<option value="typically">Typically</option>
			<option value="Bronze">Bronze</option>
			<option value="Marble">Marble</option>
			<option value="Pewter">Pewter</option>
			<option value="Other">Other</option>
		</select>

		

		<label>Display</label>
		<select name="status" value=" <?php if(isset($_GET['scid']))echo $sculpture_detail['status']; ?>"> 
			<option value="1">Active</option>
			<option value="0">Sold</option>
		</select>
<?php
		if (isset($_GET['scid'])) {
			if (file_exists('../../images/furniture/' . $sculpture_detail['id'] . '.jpg')) {
						echo '<img style="width: 200px; clear: both" src="../../images/furniture/' . $sculpture_detail['id'] . '.jpg" />';
					}}
				?>
		<label>Image</label>
				<input type="file" name="img" /> <br> <br>

		<input type="submit" name="addSculpture" value="SUBMIT">
	</form>
</section>