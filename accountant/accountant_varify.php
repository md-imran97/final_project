<?php 
	require_once 'controller/accountant_controller.php';
	$userId=$_GET["id"];
	varifyUser($userId);
	header("Location:updateinfo.php")	
 ?>