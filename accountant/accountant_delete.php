<?php 
	require_once 'controller/accountant_controller.php';
	$userId=(int)$_GET["id"];
	deleteUser($userId);
	header("Location: updateinfo.php")
 ?>