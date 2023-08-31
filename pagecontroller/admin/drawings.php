<?php
	$title='Manage Drawings';//setting title

if (isset($_POST['type'])) {//type
	$allFurnitures_list = $drawing_table->find('product_detail', $_POST['filterProduct']);
	$cat_all = $furniture_cat->findAll();//find all thre reocrds

	$cri=[//making varibales
		'allFurnitures_list'=>$allFurnitures_list
	];
}

else{//find teh reocrds
	$allFurnitures=$drawing_table->findAll();
	$allFurnitures_list=$allFurnitures->fetchAll();//fetch the reocreds


	$cri=[//making varibale
		'allFurnitures_list'=>$allFurnitures_list
	];
}
	
	$content = loadTemplate("../../view/admin/Drawing_view.php", $cri);//laoding template