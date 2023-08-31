<?php
	$title='Manage Categories';//setting title

if (isset($_POST['type'])) {//type
	$allFurnitures_list = $painting_table->find('product_detail', $_POST['filterProduct']);
	$cat_all = $furniture_cat->findAll();//find the records

	$cri=[//variable
		'allFurnitures_list'=>$allFurnitures_list
	];
}

else{//find the reocrds
	$allFurnitures=$painting_table->findAll();
	$allFurnitures_list=$allFurnitures->fetchAll();//fetch the reocreds


	$cri=[//variable
		'allFurnitures_list'=>$allFurnitures_list
	];
}
	
	$content = loadTemplate("../../view/admin/furnitures_view.php", $cri);//laod the template