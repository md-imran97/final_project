<?php 
	require 'model/db_connect.php';

	$userId=(int)$_GET["id"];
	
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
	
	$query="select * from users where id='$userId'";
	$result=get($query);
	//echo $result[0]["lastName"];
	
	$firstName = $result[0]["firstName"];
	$lastName = $result[0]["lastName"];
	
	$email = $result[0]["email"];
	$phone = $result[0]["phone"];
	$addressStreet = $result[0]["street"];
	$addressCity = $result[0]["city"];
	$addressState =$result[0]["state"];
	$addressZip =$result[0]["postal"];
	$birthDate =$result[0]["bDate"];
	$birthMonth =$result[0]["bMonth"];
	$birthYear =$result[0]["bYear"];
	$gender =$result[0]["gender"];
	$userType=$result[0]["userType"];
	$id =$result[0]["id"];
	$status=$result[0]["status"];
	$enPass=md5($password);
	
	if(isset($_POST["update"]))
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
			$q="UPDATE users SET firstName='$firstName', lastName='$lastName', email='$email', street='$addressStreet', 
			city='$addressCity', state='$addressState', postal='$addressZip', bDate='$birthDate', bMonth='$birthMonth', bYear='$birthYear', 
			gender='$gender', password='$enPass' 
			WHERE id='$userId'";
			
		execute($q);
		echo "Update successfully";
		}
	}
	
	

?>