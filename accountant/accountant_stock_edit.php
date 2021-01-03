<?php 
	require_once 'controller/stock_controller.php';
	$userId=$_GET["id"];
	$medicine=getMedicine($userId);
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Manage Inventory</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
	<div class="jumbotron jumbotron-fluid">
  		<div class="container">
    		<h1 class="display-4">Update Information</h1>
    		<p class="lead">Welcome to XYZ hospital. Use the table below to update users.</p>
 		 </div>
 	</div>
 	<div align="center">
 	 <a href="homepage.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Accountant Homepage</a>
 			  <a href="#" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" disabled>Home</a> <br></div>

         <form method="post" action="">
			<table class="table table-sm table-hover" align="center">
				<thead>
				<tr>
 					<th>ID</th>
 					<th>Medicine Name</th>
 					<th>Buying Cost</th>
 					<th>Selling Price</th>
 					<th>Stock</th>
 				    <th>Update</th>
 				
 			</tr>
				</thead>
				<tbody>
					<?php
						foreach ($medicine as $m) {
						 	echo "<tr>";
						 		echo "<td> " .$m["id"]. "</td>";
						 		echo "<td> " .$m["name"]. "</td>";
						 		echo "<td> " .$m["unitBuyingCost"]. "</td>";
						 		echo "<td> " .$m["unitSellingCost"]. "</td>";
						 		echo "<td> " .$m["quantity"]. "</td>";
						 	echo "</tr>";	
					     } 
					 ?>
					 <tr>
					 	<td></td>
					 	<td><input type="text" name="name"></td>
					 	<td><input type="text" name="unitBuyingCost"></td>
					 	<td><input type="text" name="unitSellingCost"></td>
					 	<td><input type="text" name="quantity"></td>
					 	<td><a href="accountant_stock_update.php?id=$mid" class="btn btn-info">Update</td>
					 </tr>
					 	
				</tbody>
			</table>
			
		
		
 </body>
</body>
</html>