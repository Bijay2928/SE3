<main class="admin">
	<section class="left">

		<ul>

			<?php foreach ($categoryQuery as $cate) { ?>
				<li><a href="category&cate_id=<?php echo $cate['id']; ?>"><?php echo $cate['name']; ?></a></li>
			<?php } ?>
		</ul>
	</section>

	<section class="right">

	<h1>Paintings</h1>
	<!-- Filter new or second hand conditions -->
	<div class="filters">
		
		<form action="" method="POST">
			<label>status:</label>
			<select class="furniture_condition" >
				<option value="active">active</option>
				<option value="sold">sold</option>
			</select>
		</form>
		<br> <br> <br> <br> <br>
	</div>
	<ul id="furniture_list" class="furniture">
		
<?php
		//for each furniture as painting variable
		foreach ($furnitureQuery as $painting) {
			if($painting['status']==1){
			$categoryQuery=$furniture_cat->find('id',$painting['name']);
			$category = $categoryQuery->fetch();

		echo '<li>';

		if (file_exists('../images/furniture/' . $painting['id'] . '.jpg')) {
			echo '<a href="../images/furniture/' . $painting['id'] . '.jpg"><img src="../images/furniture/' . $painting['id'] . '.jpg" /></a>';//image location
		}
		//fetching all the informaton from database to each item
		echo '<div class="details">';
		echo '<h2>' . $painting['name'] . '</h2>';
		echo '<h3>' . $category['name'] . '</h3>';
		echo '<a href="contact&bid">£' . $painting['price'] . '</a>';
		echo '<h3>'. strtoupper($painting['type']).'</h3>';
		echo '<p>' . $painting['details'] . '</p>';

		echo '</div>';
		echo '</li>';
	}
}

	?>

</ul>

</section>

</main>