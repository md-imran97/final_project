<?php
	$phone = $email = $pass = "";
	$err_phone = $err_pass = "";
	
	$hasError=false;
	
	if(isset($_POST["signup"])){
		if(empty ($_POST["phone"])){
			$err_phone="Phone Number required";
			$hasError = true;
		}
		else{
			$phone = htmlspecialchars($_POST["phone"]);
		}
		
		$email = htmlspecialchars($_POST["email"]);
		
		if(empty ($_POST["pass"])){
			$err_pass="Password required";
			$hasError = true;
		}
		elseif(strlen($_POST["pass"]) < 8){
			$err_pass="Password must be 8 characters long";
			$hasError = true;
		}
		else{
			$pass = htmlspecialchars($_POST["pass"]);
		}
		
		if(!$hasError){
			$users = simplexml_load_file("xml/doctorData.xml");
			
			$user = $users->addChild("user");
			$user->addAttribute("id", $id);
			$user->addChild("firstname",$fname);
			$user->addChild("lastname",$lname);
			$user->addChild("dateOfbirth",$dob);
			$user->addChild("gender",$gender);
			$user->addChild("phone",$phone);
			$user->addChild("email",$email);
			$user->addChild("pass",$pass);
			
			echo "<pre>";
			print_r($users);
			echo "</pre>";
			
			$xml = new DOMDocument("1.0");
			$xml->preserveWhiteSpace=false;
			$xml->formatOutput= true;
			$xml->loadXML($users->asXML());
			
			
			$file = fopen("xml/doctorData.xml","w");
			fwrite($file,$xml->saveXML());
		}
	}
	
?>