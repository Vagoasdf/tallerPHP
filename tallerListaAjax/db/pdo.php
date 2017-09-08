<?php 
	$connection='mysql:host=localhost;dbname=talleres';
	$admin='talleres';
	$pass='ufro';
	$pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION; 
	$conn= new PDO($connection,$admin,$pass,$pdo_options);
	

