<?php 
	$title='Manage Staff';//setting title
	$allStaff=$admins->findAll();//find the reocrd
	$allStaff_list=$allStaff->fetchAll();//fetch the reocrd

	$cri=[
		'allStaff_list'=>$allStaff_list//varibale
	];
	$content = loadTemplate("../../view/admin/staff_view.php", $cri);//loading tempolate
 ?>