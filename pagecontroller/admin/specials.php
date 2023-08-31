<?php 
$all_specials= $specials->findAll();//find the records
$all_offers=$all_specials->fetchAll();//fetch the reocds
$title='Manage Offers';//title
$cri=[
	'all_offers'=>$all_offers//varibale
];
$content=loadTemplate("../../view/admin/specials_view.php",$cri);//loading template
 ?>

