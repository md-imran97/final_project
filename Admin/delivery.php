<?php
	session_start();
	if($_SESSION["username"]=="" && $_SESSION["id"]=="")
	{
		header("Location: login.php");
	}
	
?>
<?php 
	if(isset($_POST["logout"]))
	{
		 session_unset();
		 session_destroy();
		 header("Location: login.php");
	}
?>
<html>
	<head></head>
	<body>
		<div>
			<h1>XYZ Hospital</h1>
		</div>
		<div>
			<h3>Howdy, Imran </h3>
			<h4>ID : 1020</h4>
			
		</div>
		<div>
			 <a href="home.php">Home</a>&nbsp;&nbsp;
			 <a href="profile.php">My Profile</a>&nbsp;&nbsp;
			 <a href="userInfo.php">Update users info</a>&nbsp;&nbsp;
			 <a href="profit.php">Profit</a>&nbsp;&nbsp;
			 <a href="doctors.php">Doctors</a>&nbsp;&nbsp;
			 <a href="patients.php">Patients</a>&nbsp;&nbsp;
			 <br><br>
		</div>
		<div>
			<h3>Delivery</h3>
		</div>
		<div>
			<form acton="" method="post">
				<table border=".5">
					<tr>
						<td>Serial No</td>
						<td>Product Name</td>
						<td>Product ID</td>
						<td>Quantity</td>
						<td>Price</td>
					</tr>
					<tr>
						<td>1</td>
						<td>artificial Leg</td>
						<td>405</td>
						<td>5</td>
						<td>10000</td>
					</tr>
				</table>
			</form>
		</div>
		<div>
			<form action="" method="post"><input type="submit" name="logout" value="Logout"></form>
		</div>
	</body>
</html>