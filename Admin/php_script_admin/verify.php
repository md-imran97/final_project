<?php
	session_start();
	
	$_SESSION["username"] = "";
	$_SESSION["id"] = "";
	
	
?>
<?php 
	require_once 'model/db_connect.php';


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
		
		$enPass=md5($password);
		
		$query = "select * from users where id='$id' and password='$enPass'";
		
		if(!$hasError){
			//echo "yo man";
			$result =get($query);
			if(count($result)>0)
			{
				//echo "yo man";
				if($result[0]["userType"]=="admin")
				{
					$name =(string)$result[0]["lastName"] ;
					$_SESSION["username"] = $name;
					$_SESSION["id"] = $id;
					
					$cookie_name = "id";
					$cookie_value = $id;
					setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
					
					header("Location: home.php");
					//break;
				}
				else if($result[0]["userType"]=="accountant")
				{
					$name =(string)$result[0]["lastName"] ;
					$_SESSION["username"] = $name;
					$_SESSION["id"] = $id;
					
					$cookie_name = "id";
					$cookie_value = $id;
					setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
					
					header("Location: ../accountant/homepage.php");
				}
				else if($result[0]["userType"]=="doctor")
				{
					$name =(string)$result[0]["lastName"] ;
					$_SESSION["username"] = $name;
					$_SESSION["id"] = $id;
					
					$cookie_name = "id";
					$cookie_value = $id;
					setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
					
					header("Location: ../Hospital/doctorProfile.php");
				}
				else if($result[0]["userType"]=="pharmacy salesman")
				{
					$name =(string)$result[0]["lastName"] ;
					$_SESSION["username"] = $name;
					$_SESSION["id"] = $id;
					
					$cookie_name = "id";
					$cookie_value = $id;
					setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
					
					header("Location: ../Hospital/pharmacyProfile.php");
				}
				else if($result[0]["userType"]=="employee")
				{
					$name =(string)$result[0]["lastName"] ;
					$_SESSION["username"] = $name;
					$_SESSION["id"] = $id;
					
					$cookie_name = "id";
					$cookie_value = $id;
					setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
					
					header("Location: ../employeephp/profile.php");
				}
				else
				{
					echo "user not found";
				}
			}
			else
			{
				echo "user not found";
			}
		}
	}
	
?>