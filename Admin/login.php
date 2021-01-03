<?php include_once "php_script_admin/verify.php"; ?>
<html>
	<head><link rel="stylesheet" type="text/css" href="css/simpleCss.css"></head>
	<body>
		<div id="back">
			<h1>XYZ Hospital</h1>
		</div>
		<div>
			<h3>User login</h3>
		</div>
		<div>
			 <a href="base_home.php">Home Page</a>&nbsp;&nbsp;
			 <a href="registation.php">User Registation</a>&nbsp;&nbsp;
			 <a href="../employeephp/Admit_patient.php">Hospital Bed or Cabin Booking</a>&nbsp;&nbsp;
			 <a href="about.php">About Us</a>&nbsp;&nbsp;<br>
			 <br><br>
		</div>
		<div>
			<fieldset>
			* Fields are required
				<form action="" method="post">
					<table>
						<tr>
							<td>ID:</td>
							<td><input type="text" value="<?php echo $id ; ?>" name="id"></td>
							<td><span style="color:red;">*<?php echo $err_id;?></span>
							</td>
						</tr>
						<tr>
							<td>Password:</td>
							<td><input type="password" value="<?php echo $password;  ?>" name="password"></td>
							<td><span style="color:red;">*<?php echo $err_password;?></span>
							</td>
						</tr>
						<tr>
							<td colspan="2" align="right">
								<input type="submit" name="login" value="login">
							</td>
						</tr>
					</table>
				</form>
			</fieldset>
		</div>
		
		
	</body>
</html>