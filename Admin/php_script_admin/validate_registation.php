<?php 
	require 'model/db_connect.php';


?>

<?php
	$firstName = "";
	$err_firstName = "";
	$lastName = "";
	$err_lastName = "";
	$password = "";
	$err_password = "";
	$confirmPassword = "";
	$err_confirmPassword = "";
	$email = "";
	$err_email = "";
	$phone = "";
	$err_phone = "";
	$addressStreet = "";
	$addressCity = "";
	$addressState ="";
	$addressZip ="";
	$err_address ="";
	$birthDate ="";
	$birthMonth ="";
	$birthYear ="";
	$err_birthDay ="";
	$gender ="";
	$err_gender ="";
	$userType="";
	$err_userType="";
	$allSet= true;
	$id ="";
	$status="0";
	$err_status="";
	$salary=0;
	$err_salary="";
	
	$q="select max(id) as id from users";
	$r=get($q);
	$id=(int) $r[0]["id"];
	$id=$id +1 ;
	
	if(isset($_POST["register"]))
	{
		//first name validation
		if(empty($_POST["firstName"]))
		{
			$err_firstName = "*required first name";
			$allSet= false;
		}
		else{ $firstName = htmlspecialchars($_POST["firstName"]);}
		
		// last name validation
		if(empty($_POST["lastName"]))
		{
			$err_lastName = "*required last name";
			$allSet= false;
		}
		else{ $lastName = htmlspecialchars($_POST["lastName"]);}
		
		// username validation
		/*if(empty($_POST["userName"]))
		{
			$err_user_name = "*required user name";
		}
		else if(strlen($_POST["userName"]) < 6)
		{
			$err_user_name = "*at least 6 char required";
		}
		else if(strpos($_POST["userName"]," "))
		{
			$err_user_name = "*no space is allowed";
		}
		else{ $user_name = htmlspecialchars($_POST["userName"]);}
		*/
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

		if($_POST["password"] != htmlspecialchars($_POST["confirmPassword"]))
		{
			$err_confirm_password = "*password not matched";
			$allSet= false;
		}
		
		// confirm password validate
		if(empty($_POST["confirmPassword"]))
		{
			$err_confirmPassword ="* confirm password requird";
			$allSet= false;
		}
		else if($_POST["confirmPassword"] != $_POST["password"])
		{
			$err_confirmPassword ="* password not matched";
			$allSet= false;
		}
		
		// email validation
		
		if(empty($_POST["email"]))
		{
			$err_email = "*required email";
			$allSet= false;
		}
		else if(strpos($_POST["email"],"@"))
		{
			$flag = false;
			$pos = strpos($_POST["email"],"@");//echo "pos = $pos";
			$str = $_POST["email"];
			for($i = $pos; $i < strlen($str); $i++)
			{
				//echo $i ."<br>";
				//echo $pos ."<br>";
				if($str[$i] == "."){$flag = true;break;}
			}
			if($flag == true){$email = htmlspecialchars($_POST["email"]);}
			else{$err_email = "*invalid email pattern";$allSet= false;}
		}
		else{$err_email = "*invalid email pattern";$allSet= false;}
		
		
		// phone validate
		
		
		if(empty($_POST["phone"]))
		{
			$err_phone = "*required code and number";
			$allSet= false;
		}
		else if(!is_numeric($_POST["phone"]))
		{
			$err_phone = "*required numeric charecter";
			$allSet= false;
		}
		else{ $phone = htmlspecialchars($_POST["phone"]);}
		
		// address validate
		
		if(empty($_POST["addressStreet"]))
		{
			$err_address = "*required street, city state and zip code";
			$allSet= false;
		}
		else{ $addressStreet = htmlspecialchars($_POST["addressStreet"]);}
		
		if(empty($_POST["addressCity"]))
		{
			$err_address = "*required street, city state and zip code";
			$allSet= false;
		}
		else{ $addressCity = htmlspecialchars($_POST["addressCity"]);}
		
		if(empty($_POST["addressState"]))
		{
			$err_address = "*required street, city state and zip code";
			$allSet= false;
		}
		else{ $addressState = htmlspecialchars($_POST["addressState"]);}
		
		if(empty($_POST["addressZip"]))
		{
			$err_address = "*required street, city state and zip code";
			$allSet= false;
		}
		else{ $addressZip = htmlspecialchars($_POST["addressZip"]);}
		
		// birth date validate
		
		if(isset($_POST["birthDate"]))
		{
			$birthDate = $_POST["birthDate"];
		}
		else{$err_birthDay = "*day, month, year required";$allSet= false;}
		
		if(isset($_POST["birthMonth"]))
		{
			$birthMonth = $_POST["birthMonth"];
		}
		else{$err_birthDay = "*day, month, year required";$allSet= false;}
		
		if(isset($_POST["birthYear"]))
		{
			$birthYear = $_POST["birthYear"];
		}
		else{$err_birthDay = "*day, month, year required";$allSet= false;}
		
		// gender validate
		
		if(isset($_POST["gender"]))
		{
			$gender = $_POST["gender"];
			
		}
		else{$err_gender = "*gender required";$allSet= false;}
		
		// user type validate
		
		if(isset($_POST["userType"]))
		{
			$userType = $_POST["userType"];
		}
		else{$err_userType = "*user type required";$allSet= false;}
		
	
		if($allSet)
		{
			$enPass=md5($password);
			$query = "INSERT INTO users (id, firstName, lastName, email, phone, street, city, state, postal, bDate, bMonth, bYear, gender, userType, password, status)
			VALUES ('', '$firstName', '$lastName', '$email','$phone','$addressStreet','$addressCity','$addressState','$addressZip','$birthDate','$birthMonth','$birthYear','$gender','$userType','$enPass','$status')";
			
			execute($query);
			echo "Register successfully";
		}
		
	}
	
	
?>