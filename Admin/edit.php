<?php
	session_start();
	if($_SESSION["username"]=="" && $_SESSION["id"]=="")
	{
		header("Location: login.php");
	}
	
?>
<?php 
	include "php_script_admin/userUpdate.php"; 
	
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
	<head>
		
	</head>
	<body>

	<div>
			
			<h4>Howdy, <?php echo$_SESSION["username"]; ?></h4>
			<h4>ID : <?php echo$_SESSION["id"]; ?></h4>
			
		</div>
		<div>
			 <a href="home.php">Home</a>&nbsp;&nbsp;
			 <a href="profile.php">My Profile</a>&nbsp;&nbsp;
			<!-- <a href="delivery.php">Delivery</a>&nbsp;&nbsp-->
			 <a href="profit.php">Profit</a>&nbsp;&nbsp;
			 <a href="doctors.php">Doctors</a>&nbsp;&nbsp;
			 <a href="patients.php">Patients</a>&nbsp;&nbsp;
			 <br><br>
		</div>

		<div >
		  
		  <div class="column">
			<h2>Users Info Update</h2>
			<form action="" method="post">
				
				<table>
					<tr>
						<td>First name :</td>
						<td><?php echo $firstName; ?></td>
						<td><input type="text" name="firstName" value="<?php echo $firstName; ?>"> <?php echo $err_firstName; ?></td>
					</tr>
					<tr>
						<td>Last name :</td>
						<td><?php echo $lastName; ?></td>
						<td><input type="text" name="lastName" value="<?php echo $lastName; ?>"> <?php echo $err_lastName; ?></td>
					</tr>
					<tr>
						<td>Email :</td>
						<td><?php echo $email; ?></td>
						<td><input type="text" name="email" value="<?php echo $email; ?>"> <?php echo $err_email; ?></td>
					</tr>
					<tr>
						<td>Phone :</td>
						<td><?php echo $phone; ?></td>
						<td><input type="text" name="phone" value="<?php echo $phone; ?>"> <?php echo $err_phone; ?></td>
					</tr>
					<tr>
					<tr>
						<td >Address :</td>
						<td ><?php echo $addressStreet; ?></td>
						<td>
							<input type="text" placeholder="Street Address" name="addressStreet" value="<?php echo $addressStreet; ?>"><?php echo $err_address; ?>
						</td>
					<tr>
					<tr>
						<td></td>
						<td><?php echo $addressCity; ?></td>
						<td>
							<input type="text" placeholder="City" size="3" name="addressCity" value="<?php echo $addressCity; ?>"> - <input type="text" placeholder="State" size="11" name="addressState" value="<?php echo $addressState; ?>">
						</td>
					</tr>
					<tr>
						<td></td>
						<td><?php echo $addressZip; ?></td>
						<td>
							<input type="text" placeholder="Postal/Zip" name="addressZip" value="<?php echo $addressZip; ?>">
						</td>
					</tr>
						<td>Birthday :</td>
						<td><?php echo $birthDate."/";echo $birthMonth."/";echo $birthYear; ?></td>
						<td>
							<select name="birthMonth" ><?php include_once "php_script_admin/month.php"; ?></select>
							<select name="birthDate" ><?php include_once "php_script_admin/date.php"; ?></select>
							<select name="birthYear" ><?php include_once "php_script_admin/year.php"; ?></select>
							<?php echo $err_birthDay; ?>
						</td>
					</tr>
					<tr>
						<td>Gender :</td>
						<td><?php echo $gender; ?></td>
						<td>
							<input type="radio" name="gender" value="male"> Male
							<input type="radio" name="gender" value="female"> Female
							 <?php echo $err_gender; ?>
						</td>
					</tr>
					<tr>
						<td>User Type :</td>
						<td><?php echo $userType; ?></td>
						<td>
							<select name="userType"><?php include "php_script_admin/user_type _reg.php"; ?></select>
							<?php echo $err_userType; ?>
						</td>
					</tr>
					<tr>
						<td>Password :</td>
						<td></td>
						<td><input type="password" name="password" value="<?php echo $password; ?>"><?php echo $err_password; ?></td>
					</tr>
					<tr>
						<td >Confirm Password :</td>
						<td ></td>
						<td><input type="password" name="confirmPassword" value="<?php echo $confirmPassword; ?>"> <?php echo $err_confirmPassword; ?></td>
					</tr>
					<tr>
						<td>User Status :</td>
						<td><?php echo $status; ?></td>
						<td><input type="text" name="status" value="<?php echo $status; ?>"> [0 = pending ; 1 = approved]</td>
					</tr>
					
					<tr>
						
						<td colspan="2">
							<br>
							
							<input type="submit" name="update" value="Update">
							
						</td>
					</tr>
					<tr>
						<td></td>
					</tr>
				</table>
			</form>
		  </div>
		</div>
		<div>
			<form action="" method="post"><input type="submit" name="logout" value="Logout"></form>
		</div>
	</body>
</html>