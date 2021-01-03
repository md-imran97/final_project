<?php 

	$full_name = "";
	$err_full_name = "";
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
	$bookingDate ="";
	$booinghMonth ="";
	$bookinghYear ="";
	$err_bookinghDay ="";
	$booking_type ="";
	$err_booking_type ="";
	$gender ="";
	$err_gender ="";
	
	$allSet=true;
	
	
	if(isset($_POST["Confirm admission"]))
	{
	
		// full name validation
		if(empty($_POST["full_name"]))
		{
			$err_full_name = "*required full_name";
		}
		else{ $full_name = htmlspecialchars($_POST["full_name"]);}
		
		
		
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
		
		// booking date validate
		
		if(isset($_POST["bookingDate"]))
		{
			$bookingDate = htmlspecialchars($_POST["bookingDate"]);
		}
		else{$err_bookingDay = "*day, month, year required";$allSet= false;}
		
		if(isset($_POST["birthMonth"]))
		{
			$bookingMonth = htmlspecialchars($_POST["bookingMonth"]);
		}
		else{$err_bookingDay = "*day, month, year required";$allSet= false;}
		
		if(isset($_POST["bookingYear"]))
		{
			$bookingYear = htmlspecialchars($_POST["bookingYear"]);
		}
		else{$err_bookingDay = "*day, month, year required";$allSet= false;}
		
		// gender validate
		
		if(isset($_POST["gender"]))
		{
			$gender = $_POST["gender"];
			
		}
		else{$err_gender = "*gender required";$allSet= false;}
		
		if($allSet)
		{echo "profile update successfully";}
	}
	
	// booking type validate
		
		if(isset($_POST["booking type"]))
		{
			$booking type = $_POST["booking type"];
			
		}
		else{$err_booking_type = "*booking type required";$allSet= false;}
		
		if($allSet)
		{echo "profile update successfully";}
	}
	
	$pSet=true;
	
	if(isset($_POST["passwordUpdate"]))
	{
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
						else{$err_password = "*atleast one special character # or ? is required";$pSet=false;}
					}
					else{$err_password = "*atleast one digit is required";$pSet=false;}
				}
				else{$err_password = "*upper and lower case character required";$pSet=false;}
			}
			else{$err_password = "*minimum password length is 8";$pSet=false;}
		}
		else{$err_password = "*password required";$pSet=false;}

		if($_POST["password"] != $_POST["confirmPassword"])
		{
			$err_confirmPassword = "*password not matched";
			$pSet=false;
		}
		if($pSet)
		{echo "password update successfully";}
	}
	

?>