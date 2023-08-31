<?php
	$title='Manage photographs';//making titlename

if (isset($_POST['type'])) {//getting type name
	$allFurnitures_list = $photograph_table->find('product_detail', $_POST['filterProduct']);
	$cat_all = $furniture_cat->findAll();//find the records

	$cri=[//varibales
		'allFurnitures_list'=>$allFurnitures_list
	];
}

else{//find the reocreds
	$allFurnitures=$photograph_table->findAll();
	$allFurnitures_list=$allFurnitures->fetchAll();//fetch the reocreds


	$cri=[//variblae
		'allFurnitures_list'=>$allFurnitures_list
	];
}
	
	$content = loadTemplate("../../view/admin/photographicImage_view.php", $cri);//loaidng template