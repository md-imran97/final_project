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
			 <a href="profile.php">Profile</a>&nbsp;&nbsp;
			 <a href="Admit_patient.php">Admitted Patient info</a>&nbsp;&nbsp;
			 <a href="Update_patient_payment.php">Update Patient info</a>&nbsp;&nbsp;
			 <a href="Search.php">Search</a>&nbsp;&nbsp;
			 <br><br>
		</div>
		<div>
			<h3>Patients</h3>
		</div>
		<div>
			<form acton="" method="post">
				<table>
					<tr>
						<td>
							<select name="type"><?php include "php_script_validation/Admite_patient.php"; ?></select>
						</td>
						<td><input type="submit" name="typeSelect" value="Show"></td>
					</tr>
				</table><br>
				<table border=".5">
					<tr>
						
						<td>Name</td>
						<td>ID</td>
						<td>Admition Date</td>
						<td>Release Date</td>
						<td>Consultant Name</td>
						<td>Room No</td>
						<td>Bed No</td>
						<td>Status</td>
					</tr>
					<tr>
						<td>1</td>
						<td>ab khan</td>
						<td>909</td>
						<td>not set</td>
						<td>not set</td>
						<td>not set</td>
						<td>505</td>
						<td>12</td>
						<td>booked</td>
					</tr>
				</table>
			</form>
		</div>
		<div>
			<form action="" method="post"><input type="submit" name="logout" value="Logout"></form>
		</div>
	</body>
</html>