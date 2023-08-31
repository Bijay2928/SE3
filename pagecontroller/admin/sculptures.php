<?php
	$title='Manage Sculpture';//setting title

if (isset($_POST['type'])) {//type
	$allFurnitures_list = $sculpture_table->find('product_detail', $_POST['filterProduct']);
	$cat_all = $furniture_cat->findAll();//find the reocrds

	$cri=[//varible
		'allFurnitures_list'=>$allFurnitures_list
	];
}

else{//find thre reocres
	$allFurnitures=$sculpture_table->findAll();
	$allFurnitures_list=$allFurnitures->fetchAll();//fetch the reocreds


	$cri=[
		'allFurnitures_list'=>$allFurnitures_list
	];
}
	
	$content = loadTemplate("../../view/admin/sculpture_view.php", $cri);//loading templte