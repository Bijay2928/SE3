 <?php


  $furnitureQuery=$painting_table->find('name',$_GET['name']);//find teh reocreds of resprective tble
 	$categoryQuery=$furniture_cat->findAll();//find the records

 	  $cat_name=$furniture_cat->find('id',$_GET['name']);//find id and name
 	  $cat_name=$cat_name->fetch();//fetch found id andname

	$vars = [
		'furnitureQuery'=>$furnitureQuery, //varibel
		'furniture_cat'=> $furniture_cat,//varibale
		'categoryQuery'=> $categoryQuery,//varible
		'cat_name'=>$cat_name
	];
 $title = "All Furnitures";//title
 $content = loadTemplate("../view/user/category_view.php", $vars);//lading templte
?>

		