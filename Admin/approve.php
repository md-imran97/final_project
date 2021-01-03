<?php 
	require_once 'model/db_connect.php';
	
	$id=(int)$_GET["id"];
	$stat=1;
	$query = "UPDATE users SET status='$stat' WHERE id='$id'";
	execute($query);
	header("Location: home.php");

?>