
<section class="right">
	<h2>Add New Carving</h2>
	<form action="" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?php if(isset($_GET['caid']))echo $carving_detail['id'];?>"><!-- input id and get id from carving detail table-->
		<label>Select Auction Location: </label>
		<select name="auction_id" ><!--name auction_id -->
		<?php 
			foreach($cat_details as $row) //setting cat_details as row
		echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';//option value
		 ?>
		</select> 
		<label>Name</label>
		<input type="text" name="name" value=" <?php if(isset($_GET['caid']))echo $carving_detail['name']; ?>"> <!-- name form table-->

		<label>Price</label>
		<input type="text" name="price" value="<?php if(isset($_GET['caid']))echo $carving_detail['price']; ?>"> <!--price from carivng table -->

		<label>Dimention in cm</label>
		<input type="text" name="dimention" value="<?php if(isset($_GET['caid']))echo $carving_detail['dimention']; ?>"> <!--dimention form carving table -->

		<label>weight in kg</label>
		<input type="text" name="weight" value="<?php if(isset($_GET['caid']))echo $carving_detail['weight']; ?>"> <!--weight from carving table -->


		<label>Description</label>
		<textarea name="description"> <?php if(isset($_GET['caid']))echo $carving_detail['description']; ?></textarea><!-- description from carving table-->

		<label>Medium Used</label>
		<select name="material"> value=" <?php if(isset($_GET['caid']))echo $carving_detail['material']; ?>"> <!--material from carving table -->
			<option value="typically">Typically</option>
			<option value="Oak">Oak</option>
			<option value="Beach">Beach</option>
			<option value="Pine">Pine</option>
				<option value="Willow">willow</option>
			<option value="Other">Other</option>
		</select>

		

		<label>Display</label>
		<select name="status" value=" <?php if(isset($_GET['caid']))echo $carving_detail['status']; ?>"><!--status from carving table --> 
			<option value="1">Active</option>
			<option value="0">Sold</option>
		</select>
<?php
		if (isset($_GET['caid'])) {
			if (file_exists('../../images/furniture/' . $carving_detail['id'] . '.jpg')) {
						echo '<img style="width: 200px; clear: both" src="../../images/furniture/' .$carving_detail['id'] . '.jpg" />';//image location file
					}}
				?>
		<label>Image</label>
				<input type="file" name="img" /> <br> <br>

		<input type="submit" name="addcarving" value="SUBMIT"><!-- submit button-->
	</form>
</section>