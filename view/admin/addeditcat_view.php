
<section class="right">
	<h2>Add New Auction</h2>
	<form action="" method="POST">
		<input type="hidden" name="id" value="<?php if(isset($_GET['cid']))echo $cat_detail['id'];?>"> 
		<label>Name</label>
		<input type="text" name="name" value=" <?php if(isset($_GET['cid']))echo $cat_detail['name']; ?>"> 
		<label>Lot Number</label>
		<input type="text" name="lotNumber" value=" <?php if(isset($_GET['cid']))echo $cat_detail['lotNumber']; ?>"> 
		<input type="submit" name="addcat">
	</form>
</section>