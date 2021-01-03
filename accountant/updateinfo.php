<?php
	require_once 'controller/accountant_controller.php';

	$query="select * from users";
	$allUser=getAllUser();

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
    		<h1 class="display-4">Update Information</h1>
    		<p class="lead">Welcome to XYZ hospital. Use the table below to sort out users and update or varify or delete user/s.</p>
 		 </div>
 	</div>
 	<div align="center">
 		<a href="homepage.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Accountant Homepage</a>
 			  <a href="#" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" disabled>Home</a> <br>
 	</div>
 	<table class="table table-hover" align="center">
 			<tr>
 				<th>ID</th>
 				<th>First Name</th>
 				<th>Last Name</th>
 				<th>Email</th>
 				<th>Type</th>
 				<th>Status</th>
 				<th>Edit</th>
 				<th>Delete</th>
 				
 			</tr>
 			<?php
 				foreach ($allUser as $u) {
 					$uid=$u["id"];
 					
 					echo "<tr>";
 							echo "<td> ".$u["id"]."</td>";
 							echo "<td> ".$u["firstName"]."</td>";
 							echo "<td> ".$u["lastName"]."</td>";
 							echo "<td> ".$u["userType"]."</td>";
 							echo "<td> ".$u["status"]."</td>";
 							echo "<td><a href='accountant_varify.php?id=$uid' class='btn btn-success'>Varify</td>";
 							echo "<td><a href='accountant_edit.php?id=$uid' class='btn btn-info'>Edit</td>";
 							
 							
 							echo "<td><a href='accountant_delete.php?id=$uid' class='btn btn-danger'>Delete</td>";

 					echo "</tr>";
 				}
 					
 					

 			  ?>
 			 
 	</table>
 	 
 			  <form action="" method="post"><input type="submit" name="logout" value="Logout"></form>
</body>
</html>