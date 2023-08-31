<?php

	require '../db/connect.php'; //database connection code
	require '../classes/DatabaseTable.php';
	require '../functions/loadTemplate.php';
	
	$painting_table = new DatabaseTable('painting');
	$carving_table = new DatabaseTable('carving');
	$drawing_table = new DatabaseTable('drawing');
	$photograph_table = new DatabaseTable('photograph');
	$sculpture_table = new DatabaseTable('sculpture'); 
	$furniture_cat = new DatabaseTable('auctionn');
	$admins= new DatabaseTable('admins');
	$enquiries= new DatabaseTable('enquiries');
	$specials= new DatabaseTable('special');

?>