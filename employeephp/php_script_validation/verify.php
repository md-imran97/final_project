<?php session_start();
	$_SESSION["username"] = "";
	$_SESSION["id"] = "";
?>
<?php
	
	$id="";
	$err_id="";
	$password="";
	$err_password="";
	$hasError=false;
	if(isset($_POST["login"])){
		if(empty($_POST["id"])){
			$err_id="id Required";
			$hasError =true;	
		}
		else{
			$id = htmlspecialchars($_POST["id"]);
		}
		if(empty ($_POST["password"])){
			$err_password="Password Required";
			$hasError = true;
		}
		else{
			$password=htmlspecialchars($_POST["password"]);
		}
		
		if(!$hasError){
			$users = simplexml_load_file("data_admin/users.xml");
			
			$data = $users->user;
			//echo $data[1]->username;
			$i=0;
			
			
			for( ;$i<count($data);$i++)
			{
				
				if((string)$data[$i]->ID == $id && (string)$data[$i]->password == $password)
				{
					if((string)$data[$i]->userType == "admin")
					{
						$name =(string)$data[$i]->lastName ;
						$_SESSION["username"] = $name;
						$_SESSION["id"] = $id;
						header("Location: home.php");
						break;
					}
					else if((string)$data[$i]->userType == "pharmacy salesman")
					{
						$name =(string)$data[$i]->lastName ;
						$_SESSION["username"] = $name;
						$_SESSION["id"] = $id;
						header("Location: ../Hospital/Pharmacy/pharmacyProfile.php");
						break;
					}
					else if((string)$data[$i]->userType == "doctor")
					{
						$name =(string)$data[$i]->lastName ;
						$_SESSION["username"] = $name;
						$_SESSION["id"] = $id;
						header("Location: ../Hospital/Doctor/doctorProfile.php");
						break;
					}
					else if((string)$data[$i]->userType == "employee")
					{
						$name =(string)$data[$i]->lastName ;
						$_SESSION["username"] = $name;
						$_SESSION["id"] = $id;
						header("Location: ../Midproject_employeephp/Search.php");
						break;
					}
					
					
				}
					
			}
			if($i==count($data))
			{
				echo "invalid id or pass";
			}
			//$user = $users->addChild("user");
			//$user->addChild("username",$uname);
			//$user->addChild("password",$pass);
			//$user->addChild("type","user");
			//echo "<pre>";
			//print_r($users);
			//echo "</pre>";
			
			//$xml = new DOMDocument("1.0");
			//$xml->preserveWhiteSpace=false;
			//$xml->formatOutput= true;
			//$xml->loadXML($users->asXML());
			
			
			//$file = fopen("data.xml","w");
			//fwrite($file,$xml->saveXML());
		}
	}
	
?>