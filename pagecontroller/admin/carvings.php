<?php
	$title='Manage carving';//settig title

if (isset($_POST['type'])) {//type getting
	$allFurnitures_list = $carving_table->find('product_detail', $_POST['filterProduct']);//selecting table
	$cat_all = $furniture_cat->findAll();//fetch all the reocrds

	$cri=[//making varibales
		'allFurnitures_list'=>$allFurnitures_list
	];
}

else{//else conditon
	$allFurnitures=$carving_table->findAll();//fetch alllt eh records
	$allFurnitures_list=$allFurnitures->fetchAll();


	$cri=[//making varibales
		'allFurnitures_list'=>$allFurnitures_list
	];
}
	
	$content = loadTemplate("../../view/admin/carving_view.php", $cri);//loading tempalte