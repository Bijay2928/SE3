<?php

	$title='Manage Categories';//setting title

	$allCategories=$furniture_cat->findAll();//find teh record
	$allCategories_list=$allCategories->fetchAll();//fetch the rocrds

	$cri=[
		'allCategories_list'=>$allCategories_list
	];
	$content = loadTemplate("../../view/admin/categories_view.php", $cri);//loading the template


