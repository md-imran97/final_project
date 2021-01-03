<?php include_once "php_script_admin/validate_registation.php"; ?>

<html>
	<head><link rel="stylesheet" type="text/css" href="css/simpleCss.css"></head>
	<body>
		<div id="back">
			<h1>XYZ Hospital</h1>
		</div>
		<div>
			 <div>
			 <a href="base_home.php">Home Page</a>&nbsp;&nbsp;
			 <a href="login.php">User Login</a>&nbsp;&nbsp;
			 <a href="../employeephp/Admit_patient.php">Hospital Bed or Cabin Booking</a>&nbsp;&nbsp;
			 <a href="about.php">About Us</a>&nbsp;&nbsp;<br>
			 <br><br>
		</div>
			 
			 <br><br>
		</div>
		<div>
			<h3>User Registation</h3>
			<form action="" method="post" onsubmit="return validate()">
				
				<table>
					<tr>
						<td align="right">First name :</td>
						<td><input type="text" id="firstName" name="firstName" value="<?php echo $firstName; ?>"> <?php echo $err_firstName; ?> <span id="err_firstName"></span></td>
					</tr>
					<tr>
						<td align="right">Last name :</td>
						<td><input type="text" id="lastName" name="lastName" value="<?php echo $lastName; ?>"> <?php echo $err_lastName; ?> <span id="err_lastName"></span></td>
					</tr>
					<tr>
						<td align="right">Email :</td>
						<td><input type="text" id="email" name="email" value="<?php echo $email; ?>"> <?php echo $err_email; ?> <span id="err_email"></span></td>
					</tr>
					<tr>
						<td align="right">Phone :</td>
						<td><input type="text" id="phone" name="phone" value="<?php echo $phone; ?>"> <?php echo $err_phone; ?> <span id="err_phone"></span></td>
					</tr>
					<tr>
						<td align="right">Address:</td>
						<td>
							<input type="text" placeholder="Street Address" id="addressStreet" name="addressStreet" value="<?php echo $addressStreet; ?>"><?php echo $err_address; ?>
							<span id="err_address"></span>
						</td>
					<tr>
						<td></td>
						<td>
							<input type="text" placeholder="City" size="3" id="addressCity" name="addressCity" value="<?php echo $addressCity; ?>"> - <input type="text" placeholder="State" size="11" id="addressState" name="addressState" value="<?php echo $addressState; ?>">
						</td>
					</tr>
					<tr>
						<td></td>
						<td>
							<input type="text" placeholder="Postal/Zip" id="addressZip" name="addressZip" value="<?php echo $addressZip; ?>">
						</td>
					</tr>
					<tr>
						<td align="right">Date of Birth :</td>
						<td>
							<select name="birthMonth" id="birthMonth"><?php include_once "php_script_admin/month.php"; ?></select>
							<select name="birthDate" id="birthDate"><?php include_once "php_script_admin/date.php"; ?></select>
							<select name="birthYear" id="birthYear"><?php include_once "php_script_admin/year.php"; ?></select>
							<?php echo $err_birthDay; ?> <span id="err_birthDay"></span>
						</td>
					</tr>
					<tr>
						<td align="right">Gender :</td>
						<td>
							<input type="radio" name="gender" id="gender" value="male"> Male
							<input type="radio" name="gender" id="gender" value="female"> Female
							<?php echo $err_gender; ?> <span id="err_gender"></span>
						</td>
					</tr>
					<tr>
						<td align="right">User Type :</td>
						<td>
							<select name="userType" id="userType"><?php include_once "php_script_admin/user_type _reg.php"; ?></select>
							<?php echo $err_userType; ?> <span id="err_userType"></span>
						</td>
					</tr>
					<tr>
						<td align="right">Password :</td>
						<td><input type="password" id="password" name="password" value="<?php echo $password; ?>"> <?php echo $err_password; ?> <span id="err_password"></span></td>
					</tr>
					<tr>
						<td align="right">Confirm Password :</td>
						<td><input type="password" id="confirmPassword" name="confirmPassword" value="<?php echo $confirmPassword; ?>"> <?php echo $err_confirmPassword; ?> <span id="err_confirmPassword"></span></td>
					</tr>
					<tr>
						<td align="right">ID :</td>
						<td><?php echo $id; ?></td>
					</tr>
					<tr>
						<td></td>
						<td><br><input type="submit" id="register" name="register" value="Register"></td>
					</tr>
					
				</table>
			</form>
		</div>
		<script src="js/regValidation.js">
		
			
		</script>
		
	</body>
</html>