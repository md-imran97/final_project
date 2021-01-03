<?php 
	require 'model/db_connect.php';
	
	$cost="";
	$revenue="";
	$profit="";
	
	$query="select  medicine.* , transaction.*, sum(unitBuyingCost * medicineUnit) as cost , 
    sum(unitSellingCost * medicineUnit) as revenue  FROM transaction
        INNER JOIN medicine ON transaction.medicineId=medicine.id ";
	
	$result=get($query);
	$cost=(int)$result[0]["cost"];
	$revenue=(int)$result[0]["revenue"];
	$profit=$revenue-$cost;

?>