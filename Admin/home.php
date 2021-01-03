<?php
	session_start();
	if($_SESSION["username"]=="" && $_SESSION["id"]=="")
	{
		header("Location: login.php");
	}
	
?>
<?php  
	
	
	
	if(isset($_POST["logout"]))
	{
		 session_unset();
		 session_destroy(); 
		 header("Location: login.php");
	}
	
?>

<html>
	<head><link rel="stylesheet" type="text/css" href="css/simpleCss.css"></head>
	<body>
		<div id="back">
			<h1>XYZ Hospital</h1>
		</div>
		<div >
			<h3>Howdy, <?php echo $_SESSION["username"] ?> </h3>
			<h4>ID : <?php echo $_COOKIE["id"]; ?> </h4>
			
		</div>
		<div>
			 <span >Home</span>&nbsp;&nbsp;
			 <a href="profile.php">My Profile</a>&nbsp;&nbsp;
			 <!-- <a href="userInfo.php">Update users info</a>&nbsp;&nbsp;-->
			<!-- <a href="delivery.php">Delivery</a>&nbsp;&nbsp;-->
			 <a href="profit.php">Profit</a>&nbsp;&nbsp;
			 <a href="doctors.php">Doctors</a>&nbsp;&nbsp;
			 <a href="patients.php">Patients</a>&nbsp;&nbsp;
			 <br><br>
		</div>
		<div>
			<h3></h3>
		</div>
		<div>
					
			<input type="text" id="search" name="search" placeholder="Type user ID...." onkeyup="liveSearch(this)">
		</div>
		<br>
		<div>
			<!--<table border=".5">
				<tr>
					<td>Serial No</td>
					<td>Name</td>
					<td>ID</td>
					<td>Type</td>
					<td>Email</td>
					<td>Status</td>
					<td>Approval</td>
					<td>Delete</td>
					<td>Edit</td>
				</tr>
				
			</table>-->
			
		</div>
		<div id="suggestion"></div>	
				
		<br>
		<div>
			<!-- <table border=".5">
				<tr>
					<td>Serial No</td>
					<td>Name</td>
					<td>ID</td>
					<td>Type</td>
					<td>Email</td>
					<td>Status</td>
					<td>Approval</td>
					<td>Delete</td>
					<td>Edit</td>
				</tr>
				
			</table> -->
			
		</div>
		<br>
		<div>
			<form action="" method="post"><input type="submit" name="logout" value="Logout"></form>
		</div>
		<script src="js/homeSearch.js">
			
		</script>
	</body>
</html>