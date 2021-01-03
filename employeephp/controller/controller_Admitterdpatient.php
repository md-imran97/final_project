<?php 
	require_once 'model/db_connect.php';

	$name="";
	$email="";
	$phone="";
	$cabin number="";
	$cabin type="";
	$address="";
	$booking date="";
	$gender="";
	$about disease="";
	$id="";
	
	if(isset($_POST["Admit_patient"]))
	{
		$name=$_POST["name"];
		$email=(int)$_POST["email"];
		$phone=$_POST["phone"];
		$cabin number=(int)$_POST["cabin number"];
		$cabin type=(int)$_POST["cabin type"];
		$address=(int)$_POST["address"];
		$booking date=(int)$_POST["booking date"];
		$gender=$_POST["gender"];
		$about disease=(int)$_POST["about disease"];
		$id=(int)$_POST["id"];
		studentAdd($name,$email,$phone,$cabin number,$cabin type,$address,$booking date,$gender,$about disease,$id);
		
		echo "Admite patient can register successfully";
	}
	else if(isset($_POST["update"]))
	{
		$name=$_POST["name"];
		$email=(int)$_POST["email"];
		$phone=$_POST["phone"];
		$cabin number=(int)$_POST["cabin number"];
		$cabin type=(int)$_POST["cabin type"];
		$booking date=(float)$_POST["booking date"];
		$gender=(int)$_POST["gender"];
		$about disease=(int)$_GET["about disease"];
		$id=(int)$_GET["id"];
		update_profile_info($name,$email,$phone,$cabin number,$cabin type,$address,$booking date,$gender,$about disease,$id);
		//echo "$id";
	}
	
	
	function Admit_patient($name,$email,$phone,$cabin number,$cabin type,$address,$booking date,$gender,$about disease,$id)
	{
		$query="insert into admite patient values ('$name,$email,$phone,$cabin number,$cabin type,$address,$booking date,$gender,$about disease,$id')";
		execute($query);
	}
	function getAdmite_patient()
	{
		$query="SELECT students.*, department.name as dname FROM students
		INNER JOIN department ON students.dept_id=department.id";
		//$query="select * from students";
		$result=get($query);
		//echo "works";
		return $register;
	}
	function getAdmite parient($sid)
	{
		//global $admitted patientId;
		//$admitted patientId=$id;
		$query="SELECT sadmite patient.*, patient.name as dname FROM admite patient
		INNER JOIN patient ON admite patient.id=patient.id where admite patient.id='$id'";
		//$query="select * from admite patient";
		$result=get($query);
		//echo "$id";
		return $register;
	}
	
	function update_profile_info($$name,$email,$phone,$cabin number,$cabin type,$address,$booking date,$gender,$about disease,$id)
	{	
		//global $admitted patientId;
		$query = "UPDATE `admite patient profile` SET `name`='$name', `email`='$email', `phone`='$phone', ``cabin number='$cabin number', `cabin type`='$cabin type', `address`='$address',
		`booking date`='$booking date',gender='$gender', about disease='$about disease'" 
		WHERE `id`='$id'";
		execute($query);
		echo "Updated successfully";
	}
	
	function deleteStudent($sid)
	{
		$query="DELETE FROM admite patient WHERE id='$id'";
		execute($query);
	}

?>