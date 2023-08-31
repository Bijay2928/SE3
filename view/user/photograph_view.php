<main class="admin">
	<section class="left">

		<ul>

			<?php foreach ($categoryQuery as $cate) { ?>
				<li><a href="category&cate_id=<?php echo $cate['id']; ?>"><?php echo $cate['name']; ?></a></li>
			<?php } ?>
		</ul>
	</section>

	<section class="right">

	<h1>Photographs</h1>
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
		//foreach furniture as photograph
		foreach ($furnitureQuery as $photograph) {
			if($photograph['status']==1){
			$categoryQuery=$furniture_cat->find('id',$photograph['name']);
			$category = $categoryQuery->fetch();

		echo '<li>';

		if (file_exists('../images/furniture/' . $photograph['id'] . '.jpg')) {
			echo '<a href="../images/furniture/' . $photograph['id'] . '.jpg"><img src="../images/furniture/' . $photograph['id'] . '.jpg" /></a>';//image location
		}
		// fetching all the information from database to each item in the page.
		echo '<div class="details">';
		echo '<h2>' . $photograph['name'] . '</h2>';
		echo '<h3>' . $category['name'] . '</h3>';
		echo '<h4>£' . $photograph['price'] . '</h4>';
		echo '<h3>'. strtoupper($photograph['type']).'</h3>';
		echo '<p>' . $photograph['details'] . '</p>';

		echo '</div>';
		echo '</li>';
	
	}
}

	?>

</ul>

</section>

</main>