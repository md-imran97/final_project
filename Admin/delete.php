<?php 
	require_once 'model/db_connect.php';
	
	$id=(int)$_GET["id"];
	$query = "delete from users WHERE id='$id'";
	execute($query);
	header("Location: home.php");

?>