<?php
	$server = '127.0.0.1';//server
	$username = 'root';//username
	$password = '';//password

	
	$schema = 'auction';//auction is the database name created on localhost phpmyadmin
	$pdo = new PDO('mysql:dbname=' . $schema . ';host=' . $server, $username, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);