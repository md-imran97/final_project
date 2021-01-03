<?php
	require_once 'controller/accountant_controller.php';
	$query= "select  medicine.* , transaction.*, sum(unitBuyingCost * medicineUnit) as cost ,
    	sum(unitSellingCost * medicineUnit) as revenue  FROM transaction
        INNER JOIN medicine ON transaction.medicineId=medicine.id ";
        $allTransaction=getAllRecord($query);
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Update Information</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
	<div class="jumbotron jumbotron-fluid">
  		<div class="container">
    		<h1 class="display-4">Transactions</h1>
    		<p class="lead">Welcome to XYZ hospital.
    		This is the record of all the transaction.</p>
 		 </div>
 		 <div align="center">
 		<a href="homepage.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Accountant Homepage</a>
 			  <a href="#" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" disabled>Home</a> <br>
 	</div>

 	</div>
 	<table class="table table-hover" align="center">
 			<tr>
 				<th>Patient ID</th>
 				<th>Medicine Name</th>
 				<th>Cost</th>
 				<th>Revenue</th>
 				
 				
 			</tr>
 			<?php
 				foreach ($allTransaction as $t) {
 					$uid=$t["id"];
 					
 					echo "<tr>";
 							echo "<td> ".$t["id"]."</td>";
 							echo "<td> ".$t["name"]."</td>";
 							echo "<td> ".$t["cost"]."</td>";
 							echo "<td> ".$t["revenue"]."</td>";

 					echo "</tr>";
 				}
 					
 					

 			  ?>
 			 
 	</table>
 
</body>
</html>