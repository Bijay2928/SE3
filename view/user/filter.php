<?php 
	require '../../db/connect.php';//require db connection page
	require '../../classes/DatabaseTable.php';//require database table
	
	$furniture = new DatabaseTable('furniture');//connection to the furniture table
	$cats = new DatabaseTable('category');//conntecion to the category table

	$fur = $furniture->find('type', $_POST['furniture_cond']);
	$allcat = $cats->findAll();//fetch all the records
	
	foreach ($fur as $furniture) {
		if($furniture['display']==1){
			$categoryQuery = $cats->find('id', $furniture['cat_id']);
			$categoryFetched = $categoryQuery->fetch(); 
	
	echo '<li>';

	
			echo '<a href="../images/furniture/' . $furniture['id'] . '.jpg"><img src="../images/furniture/' . $furniture['id'] . '.jpg" /></a>';
	
			//fetching all the details from database
		echo '<div class="details">';
		echo '<h2>' . $furniture['name'] . '</h2>';
		echo '<h3>' . $categoryFetched['name'] . '</h3>';
		echo '<h4>£' . $furniture['price'] . '</h4>';
		echo '<h3>'. strtoupper($furniture['type']).'</h3>';
		echo '<p>' . $furniture['description'] . '</p>';

		echo '</div>';
		echo '</li>';
} } ?>