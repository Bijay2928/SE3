		<?php
	
	$offers = $specials->findAll();//find all the details of specials
	$cri=[
		'offers'=>$offers];


		 $title = "Fran's Furniture";//setting title
		$content = loadTemplate("../view/user/home.php",$cri) ?>

		