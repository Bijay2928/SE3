<main class="admin">
	<section class="left">

		<ul>

			<?php foreach ($categoryQuery as $cate) { ?>
				<li><a href="category&cate_id=<?php echo $cate['id']; ?>"><?php echo $cate['name']; ?></a></li>
			<?php } ?>
		</ul>
	</section>

	<section class="right">

	<h1>Drawings</h1>
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
		//foreach furniture as drawing variable	
		foreach ($furnitureQuery as $drawing) {
			if($drawing['status']==1){
			$categoryQuery=$furniture_cat->find('id',$drawing['name']);
			$category = $categoryQuery->fetch();

		echo '<li>';

		if (file_exists('../images/furniture/' . $drawing['id'] . '.jpg')) {
			echo '<a href="../images/furniture/' . $drawing['id'] . '.jpg"><img src="../images/furniture/' . $drawing['id'] . '.jpg" /></a>';
		}
		//fetching all the details from database
		echo '<div class="details">';
		echo '<h2>' . $drawing['name'] . '</h2>';
		echo '<h3>' . $category['name'] . '</h3>';
		echo '<h4>£' . $drawing['price'] . '</h4>';
		echo '<h3>'. strtoupper($drawing['medium']).'</h3>';
		echo '<p>' . $drawing['description'] . '</p>';

		echo '</div>';
		echo '</li>';
	
	}
}

	?>

</ul>

</section>

</main>