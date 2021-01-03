<?php include_once "php_script_admin/verify.php" ;?>
<html>
	<head></head>
	<body>
		
		<fieldset>
		* Fields are required
			<form action="" method="post">
				<table>
					<tr>
						<td>ID:</td>
						<td><input type="text" value="<?php echo $uname?>" name="id"></td>
						<td><span style="color:red;">*<?php echo $err_id;?></span>
						</td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><input type="password" value="<?php echo $pass?>" name="password"></td>
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
	</body>
</html>