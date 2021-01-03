<?php 
	require_once 'controller/accountant_controller.php';
	$userId=$_GET["id"];
	$user=getAUser((int)$userId);

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Update User</title>
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
 			  <br>
 			  <br>
		<form method="post" onsubmit="return validate()" action="">
			<table class="table table-sm table-hover" align="center">
				<thead>
					<th>ID</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>E-Mail</th>
					<th>Phone</th>
					<th>Street</th>
					<th>City</th>
					<th>State</th>
					<th>Postal Code</th>
					<th>Date Of Birth</th>
					<th>Gender</th>
					<th>User Type</th>
					<th>Status</th>
				</thead>
				<tbody>
					<?php
						foreach ($user as $s) {
						 	$userId=$s["id"];
						 	$d=$s["bDate"];
						 	$m=$s["bMonth"];
						 	$y=$s["bYear"];
						 	$merge= "$d"." - "."$m"." - "."$y";
						 	echo "<tr>";
						 		echo "<td> " .$s["id"]. "</td>";
						 		echo "<td> " .$s["firstName"]. "</td>";
						 		echo "<td> " .$s["lastName"]. "</td>";
						 		echo "<td> " .$s["email"]. "</td>";
						 		echo "<td> " .$s["phone"]. "</td>";
						 		echo "<td> " .$s["street"]. "</td>";
						 		echo "<td> " .$s["city"]. "</td>";
						 		echo "<td> " .$s["state"]. "</td>";
						 		echo "<td> " .$s["postal"]. "</td>";
						 		echo "<td> $merge</td>";
						 		echo "<td> " .$s["gender"]. "</td>";
						 		echo "<td> " .$s["userType"]. "</td>";
						 		echo "<td> " .$s["status"]. "</td>";
						 	echo "</tr>";
					     } 
					 ?>
					 <tr>
					 	<td></td>
					 	<td><input type="text" id="firstName" name="firstName"></td>
					 	<td><input type="text" id="lastName" name="lastName"></td>
					 	<td><input type="text" id="email" name="email"></td>
					 	<td><input type="text" id="phone" name="phone"></td>
					 	<td><input type="text" id="street" name="street"></td>
					 	<td><input type="text" id="city" name="city"></td>
					 	<td><input type="text" id="state" name="state"></td>
					 	<td><input type="text" id="postal" name="postal"></td>
					 	<td>
					 		<select name="bMonth" id="bMonth"><?php 
					 			include_once "php/month.php"; ?></select>
					 		<select name="bDate" id="bDateh"><?php 
					 			include_once "php/date.php"; ?></select>
					 		<select name="bYear" id="bYear"><?php 
					 			include_once "php/year.php"; ?></select>
					 			
					 		</select>
					 	</td>
					 	<td>
					 		<select name="gender" id="gender"><?php 
					 			include_once "php/gender.php"; ?>
					 		</select>
					 	</td>
					    <td>
					    	<select name="userType" id="userType"><?php 
					    		include_once "php/userType.php"; ?>
					    	</select>
					    </td>
					    <td>
					    	<select name="status" id="status"><?php 
					    		include_once "php/status.php"; ?>
					    		
					    	</select>
					    </td>
					 </tr>
					 <tr>
					 	<td></td>
					 	<td><span id="err_firstName"></span></td>
					 	<td><span id="err_lastName"></span></td>
					 	<td><span id="err_email"></span></td>
					 	<td><span id="err_phone"></span></td>
					 	<td><span id="err_street"></span></td>
					 	<td><span id="err-ciy"></span></td>
					 	<td><span id="err_state"></span></td>
					 	<td><span id="err_postal"></span></td>
					 	<td><span id="err_dob"></span></td>
					 	<td><span id="err_gender"></span></td>
					 	<td><span id="err_userType"></span></td>
					 	
					 </tr>
					 <tr>
					 	<td></td>
					 	<td><br><input type="submit" id="update" name="update" value="Update"></td>
					 </tr>
				</tbody>
			</table>
			
		</form> 
		<script type="js/accountant_validation.js"></script>
 </body>
 </html>