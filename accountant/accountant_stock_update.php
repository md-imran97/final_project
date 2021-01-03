<?php 
	require_once 'controller/accountant_controller.php';
	$userId=$_GET["id"];
	updateMedicine($userId);
	header("Location:accountant_stock.php")	
 ?>