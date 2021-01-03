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
	require 'php_script_admin/profitController.php';
?>
<html>
	<head></head>
	<body>
		<div>
			<h1>XYZ Hospital</h1>
		</div>
		<div>
			<h3>Howdy, <?php echo$_SESSION["username"]; ?></h3>
			<h4>ID : <?php echo$_SESSION["id"]; ?></h4>
			
		</div>
		<div>
			 <a href="home.php">Home</a>&nbsp;&nbsp;
			 <a href="profile.php">My Profile</a>&nbsp;&nbsp;
			 <!--<a href="userInfo.php">Update users info</a>&nbsp;&nbsp;-->
			<!-- <a href="delivery.php">Delivery</a>&nbsp;&nbsp;-->
			 <a href="doctors.php">Doctors</a>&nbsp;&nbsp;
			 <a href="patients.php">Patients</a>&nbsp;&nbsp;
			 <br><br>
		</div>
		<div>
			<h3>Profit</h3>
		</div>
		<div>
			<form acton="" method="post">
				
				<table border=".5">
					<tr>
						<th>Cost</th>
						<th>Revenue</th>
						<th>Profit</th>
					</tr>
					<tr>
						<td><?php echo $cost; ?></td>
						<td><?php echo $revenue; ?></td>
						<td><?php echo $profit; ?></td>
					</tr>
					
				</table>
				<br>
				
			</form>
		</div>
		<br>
		<div>
			<form action="" method="post"><input type="submit" name="logout" value="Logout"></form>
		</div>
	</body>
</html>