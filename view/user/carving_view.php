<main class="admin">
	<section class="left">

		<ul>

			<?php foreach ($categoryQuery as $cate) { ?>
				<li><a href="category&cate_id=<?php echo $cate['id']; ?>"><?php echo $cate['name']; ?></a></li>
			<?php } ?>
		</ul>
	</section>

	<section class="right">

	<h1>Carvings</h1>
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
		//foreach furnitture as carving varibale
		foreach ($furnitureQuery as $carving) {
			if($carving['status']==1){//if status is 1 find name and id of carivng
			$categoryQuery=$furniture_cat->find('id',$carving['name']);
			$category = $categoryQuery->fetch();//fetch records

		echo '<li>';

		if (file_exists('../images/furniture/' . $carving['id'] . '.jpg')) {
			echo '<a href="../images/furniture/' . $carving['id'] . '.jpg"><img src="../images/furniture/' . $carving['id'] . '.jpg" /></a>';//image location
		}
		//fetching all the item details in the page

		echo '<div class="details">';
		echo '<h2>' . $carving['name'] . '</h2>';
		echo '<h3>' . $category['name'] . '</h3>';
		echo '<h4>£' . $carving['price'] . '</h4>';
		echo '<h3>'. strtoupper($carving['material']).'</h3>';
		echo '<p>' . $carving['description'] . '</p>';

		echo '</div>';
		echo '</li>';
	
	}
}

	?>

</ul>

</section>

</main>