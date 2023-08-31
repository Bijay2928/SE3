
<main class="admin">
	<section class="left">
		<ul>
			<?php foreach ($categoryQuery as $cate) { ?>
				<li><a href="category&cate_id=<?php echo $cate['id']; ?>"><?php echo $cate['name']; ?></a></li>
			<?php } ?>
		</ul>
	</section>

	<section class="right">

		<h1><?php echo $cat_name['name']; ?></h1>

	<ul class="furniture">
<?php
		//foreach furniture as pianting
		foreach ($furnitureQuery as $painting) {
			$categoryQuery=$furniture_cat->find('id',$painting['name']);
			
			$category = $categoryQuery->fetch();
		echo '<li>';

		if (file_exists('../images/furniture/' . $painting['id'] . '.jpg')) {
			echo '<a href="../images/furniture/' . $painting['id'] . '.jpg"><img src="../images/furniture/' . $painting['id'] . '.jpg" /></a>';//image location
		}
		//fetching all the information from database tabel to the page
		echo '<div class="details">';
		echo '<h2>' . $painting['name'] . '</h2>';
		echo '<h3>' . $category['name'] . '</h3>';
		echo '<h4>£' . $painting['price'] . '</h4>';
		echo '<p>' . $painting['details'] . '</p>';

		echo '</div>';
		echo '</li>';
	}

	?>

</ul>

</section>

</main>