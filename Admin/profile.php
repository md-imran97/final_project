
<?php include_once "php_script_admin/validate_profile_update.php"; ?>
<?php 
	if(isset($_POST["logout"]))
	{
		 session_unset();
		 session_destroy();
		 header("Location: login.php");
	}
?>


<html>
	<head><link rel="stylesheet" type="text/css" href="css/simpleCss.css"></head>
	<body>
		<div id="back">
			<h1>XYZ Hospital</h1>
		</div>
		<div>
			<h3>Howdy, <?php echo $_SESSION["username"]; ?> </h3>
			<h4>ID : <?php echo $_SESSION["id"]; ?></h4>
			
		</div>
		<div>
			 <span >My Profile</span>&nbsp;&nbsp;
			 <a href="home.php">Home</a>&nbsp;&nbsp;
			<!-- <a href="userInfo.php">Update users info</a>&nbsp;&nbsp;-->
			<!-- <a href="delivery.php">Delivery</a>&nbsp;&nbsp;-->
			 <a href="profit.php">Profit</a>&nbsp;&nbsp;
			 <a href="doctors.php">Doctors</a>&nbsp;&nbsp;
			 <a href="patients.php">Patients</a>&nbsp;&nbsp;
			 <br><br>
		</div>
		<div>
			<h3>Profile</h3>
		</div>
		<div>
			<h3>Update Info</h3>
		</div>
		<div>
			<form action="" method="post" onsubmit="return validate()">
				<table>
					<tr>
						<td align="right">First name :</td>
						<td><input type="text" name="firstName" id="firstName" value="<?php echo $firstName; ?>"> <?php echo $err_firstName; ?> <span id="err_firstName"></span></td>
					</tr>
					<tr>
						<td align="right">Last name :</td>
						<td><input type="text" name="lastName" id="lastName" value="<?php echo $lastName; ?>"> <?php echo $err_lastName; ?> <span id="err_lastName"></span></td>
					</tr>
					<tr>
						<td align="right">Email :</td>
						<td><input type="text" name="email" id="email" value="<?php echo $email; ?>"> <?php echo $err_email; ?> <span id="err_email"></span></td>
					</tr>
					<tr>
						<td align="right">Phone :</td>
						<td><input type="text" name="phone" id="phone" value="<?php echo $phone; ?>"> <?php echo $err_phone; ?> <span id="err_phone"></span></td>
					</tr>
					<tr>
						<td align="right">Address:</td>
						<td>
							<input type="text" placeholder="Street Address" name="addressStreet" id="addressStreet" value="<?php echo $addressStreet; ?>"><?php echo $err_address; ?>
							<span id="err_address"></span>
						</td>
					<tr>
						<td></td>
						<td>
							<input type="text" placeholder="City" size="3" name="addressCity" id="addressCity" value="<?php echo $addressCity; ?>"> - <input type="text" placeholder="State" size="11" id="addressState" name="addressState" value="<?php echo $addressState; ?>">
						</td>
					</tr>
					<tr>
						<td></td>
						<td>
							<input type="text" placeholder="Postal/Zip" name="addressZip" id="addressZip" value="<?php echo $addressZip; ?>">
						</td>
					</tr>
					<tr>
						<td align="right">Date of Birth :</td>
						<td>
							<select name="birthMonth" id="birthMonth"><?php include_once "php_script_admin/month.php"; ?></select>
							<select name="birthDate" id="birthDate"><?php include_once "php_script_admin/date.php"; ?></select>
							<select name="birthYear" id="birthYear"><?php include_once "php_script_admin/year.php"; ?></select>
							<?php echo $err_birthDay; ?><span id="err_birthDay"></span>
						</td>
					</tr>
					<tr>
						<td align="right">Gender :</td>
						<td>
							<input type="radio" name="gender" id="gender" value="male"> Male
							<input type="radio" name="gender" id="gender" value="female"> Female
							 <?php echo $err_gender; ?><span id="err_gender"></span>
						</td>
					</tr>
					<tr>
						
						<td colspan="2">
							<br>
							
							<input type="submit" name="profileUpdate" value="Update">
							
						</td>
					</tr>
					<tr>
						<td></td>
					</tr>
				</table>
			</form>
		</div>
		<div>
			<h3>Change Password</h3>
			<form action="" method="post">
				<table>
					
					<tr>
						<td>New Password :</td>
						<td><input type="password" name="password" value="<?php echo $password; ?>"> <?php echo $err_password; ?></td>
					</tr>
					<tr>
						<td>Confirm Password :</td>
						<td><input type="password" name="confirmPassword" > <?php echo $err_confirmPassword; ?></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="passwordUpdate" value="Save"></td>
					</tr>
				</table>
			</form>
		</div>
		<div>
			<form action="" method="post"><input type="submit" name="logout" value="Logout"></form>
		</div>
		<script src="js/profileValidation.js">
		</script>
	</body>
</html>