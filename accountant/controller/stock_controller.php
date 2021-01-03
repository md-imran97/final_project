<?php 
	require_once 'model/accountant_db_connect.php';
	$name="";
	$unitBuyingCost="";
	$unitSellingCost="";
	$quantity="";
	
	$mid="";

	if (isset ($_POST["update"])) {
		$name=$_POST["name"];
		$unitBuyingCost=$_POST["unitBuyingCost"];
		$unitSellingCost=$_POST["unitSellingCost"];
		$quantity=$_POST["quantity"];
		
		updateStock($name,$unitBuyingCost,$unitSellingCost,$quantity,$mid);
	}
	function getMedicine()
	{
		$query="SELECT * FROM `medicine` WHERE `id`='$mid'";
		$result=get($query);
		return $result;
	}
	function getAllMedicine(){
		$query="select * from `medicine`";
		$result=get($query);
		return $result;
	}
	


 ?>
