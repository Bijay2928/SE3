<section class="right">
	<h2><?php if (isset($_GET['asid'])) {//getting id from event
		echo 'Edit Event';
	} else echo "Add New Event"; ?>
	</h2>

	<form method="POST" action="" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?php if(isset($_GET['asid'])) echo $offer['id'] ;?>"><!--getting id from offer table -->
		<label>Title</label>
		<input type="text" name="name" value="<?php if(isset($_GET['asid'])) echo $offer['name'] ;?>"><!--getting name form offer table -->

		<label>Details</label>
		<textarea name="description"><?php if(isset($_GET['asid'])) echo $offer['description'] ;?></textarea><!--getting description from offer table -->

		<label>Start</label>
		<input type="date" name="offer_starting" value="<?php if(isset($_GET['asid'])) echo $offer['offer_starting'] ;?>"><!-- starting offer-->



		<label>End</label>
		<input type="date" name="offer_ending" value="<?php if(isset($_GET['asid'])) echo $offer['offer_ending'] ;?>"><!--ending offer -->

		<?php
		if (isset($_GET['asid'])) {
			if (file_exists('../../images/Specialoffer/' . $offer['id'] . '.jpg')) {//file location
						echo '<img style="width: 200px; clear: both" src="../../images/Specialoffer/' . $offer['id'] . '.jpg" />';
					}}
				?>
				<label>Image</label>
				<input type="file" name="special_img" /> <br> <br>

		<input type="submit" name="addOffer" value="Submit">
	</form>
</section>