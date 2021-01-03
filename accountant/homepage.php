<?php  ?>
<!DOCTYPE html>
<html>
<head>
	<title>Accountant</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
	<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Welcome</h1>
    <p class="lead">XYZ Hospital Accountant Dashboard.</p>
  </div>
 </div>
	<div>
			<table align="center">
				<tr>
					<td><div class="card" style="width: 18rem;">
  					<img src="https://cdn.onlinewebfonts.com/svg/img_55417.png" class="card-img-top" alt="..." width="500" height="300">
  					<div class="card-body">
    				<h5 class="card-title">Medicine Stock Information</h5>
    				<p class="card-text">This is checking and updating stock.</p>
    				<a href="accountant_stock.php" class="btn btn-primary stretched-link">Go to Stock Information</a>
  					</div></td>
  					<td> <div class="card" style="width: 18rem;">
  					<img src="https://cdn0.iconfinder.com/data/icons/users-3-1/24/person-up-reload-multiple-sync-human-natural-close-refresh-actions-user-512.png" class="card-img-top" alt="..." width="500"
  					height="300">
  					<div class="card-body">
    					<h5 class="card-title">Update Information</h5>
    					<p class="card-text">This is for updating Employees, Doctors & Pharmacy-Salesman Information.</p>
    					<a href="updateinfo.php" class="btn btn-primary stretched-link">Update Information</a>
  					</div>
  					</div></td>
  					<td> <div class="card" style="width: 18rem;">
  					<img src="https://cdn2.iconfinder.com/data/icons/health-care-rounded-3/512/xxx031-512.png" class="card-img-top" alt="..." width="500"
 					 height="300">
  					<div class="card-body">
    					<h5 class="card-title">Transaction</h5>
    					<p class="card-text">This is for checking Transaction regarding Patients medical records & expenses .</p>
    					<a href="records.php" class="btn btn-primary stretched-link">View Patient Information</a>
  					</div>
  					</div></td>
				</tr>
			</table>
			<form action="" method="post"><input type="submit" name="logout" value="Logout"></form>
 
	</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>