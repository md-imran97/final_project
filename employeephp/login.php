<?php
$id = "";
$err_id = "";
$password = "";
$err_password = "";


// password validation
		
		if(!empty($_POST["password"]))
		{
			if(strlen($_POST["password"]) >= 8)
			{
				if(!(strtolower($_POST["password"]) == $_POST["password"]) && (!(strtoupper($_POST["password"]) == $_POST["password"])))
				{
					$hasNumber = false;
					$num_arr = array("0","1","2","3","4","5","6","7","8","9");
					$pass =htmlspecialchars($_POST["password"]);
					for($i = 0; $i < strlen($pass); $i++)
					{
						for($j = 0; $j <10; $j++)
						{
							if($pass[$i]== $num_arr[$j])
							{
								//echo "yo<br>";
								$hasNumber = true;
								break;
							}
						}
					}
					if($hasNumber == true)
					{
						if(strpos($_POST["password"], "#") || strpos($_POST["password"], "?"))
						{
							$password = htmlspecialchars($_POST["password"]);
						}
						else{$err_password = "*atleast one special character # or ? is required";$allSet= false;}
					}
					else{$err_password = "*atleast one digit is required";$allSet= false;}
				}
				else{$err_password = "*upper and lower case character required";$allSet= false;}
			}
			else{$err_password = "*minimum password length is 8";$allSet= false;}
		}
		else{$err_password = "*password required";$allSet= false;}

		
		
		
	
	
?>

<html>
	<head></head>
	<body>
		<div>
			<h1></h1>
		</div>
		<div>
			<h3>Patient login</h3>
		</div>
		<div>
		      <a href="Registration.php">Registation</a>&nbsp;&nbsp;
			 <a href="Admit_patient.php">Admitted Patient info</a>&nbsp;&nbsp;
			 <a href="Update_patient_payment.php">Update Patient info</a>&nbsp;&nbsp;
			  <a href="update_profile_info.php">Update Profile info</a>&nbsp;&nbsp;
			 <a href="Search.php">Search</a>&nbsp;&nbsp;
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
							
							</td>
						</tr>
						<tr>
						<td align="right">Password :</td>
						<td><input type="password" name="password" value="<?php echo $password; ?>"> <?php echo $err_password; ?></td>
					</tr>
						<tr>
							<td colspan="2" align="Right">
								<input type="submit" name="login" value="login">
							</td>
						</tr>
					</table>
				</form>
			</fieldset>
		</div>
	</body>
</html>