<?php
	require_once 'controller/stock_controller.php';
	$query="select * from medicine";
	$allMedicine=getAllMedicine();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Medicine Stocks</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
	<div class="jumbotron jumbotron-fluid">
  		<div class="container">
    		<h1 class="display-4">Inventory</h1>
    		<p class="lead">Welcome to XYZ hospital.
    		This is for checking and updating Buying Cost, Selling Cost and stocks.</p>
 		 </div>
 		 <div align="center">
 		<a href="homepage.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Accountant Homepage</a>
 			  <a href="#" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" disabled>Home</a> <br>
 	</div>
 		<table class="table table-hover" align="center">
 			<tr>
 				<th>ID</th>
 				<th>Medicine Name</th>
 				<th>Buying Cost</th>
 				<th>Selling Price</th>
 				<th>Stock</th>
 				<th>Update</th>
 				
 			</tr>
 			<?php
 				foreach ($allMedicine as $m) {
 					$mid=$m["id"];
 					
 					echo "<tr>";
 							echo "<td> ".$m["id"]."</td>";
 							echo "<td> ".$m["name"]."</td>";
 							echo "<td> ".$m["unitBuyingCost"]."</td>";
 							echo "<td> ".$m["unitSellingCost"]."</td>";
 							echo "<td> ".$m["quantity"]."</td>";
 							echo "<td><a href='accountant_stock_edit.php?id=$mid' class='btn btn-info'>Edit</td>";

 					echo "</tr>";
 				}
 					
 					

 			  ?>
 			 
 	</table>
</body>
</html>