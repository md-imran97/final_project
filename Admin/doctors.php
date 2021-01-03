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
		<div>
			<h3>Howdy, <?php echo$_SESSION["username"]; ?> </h3>
			<h4>ID : <?php echo$_SESSION["id"]; ?></h4>
			
		</div>
		<div>
			 <a href="home.php">Home</a>&nbsp;&nbsp;
			 <a href="profile.php">My Profile</a>&nbsp;&nbsp;
			 <!--<a href="userInfo.php">Update users info</a>&nbsp;&nbsp;-->
			<!-- <a href="delivery.php">Delivery</a>&nbsp;&nbsp;-->
			 <a href="profit.php">Profit</a>&nbsp;&nbsp;
			 <a href="patients.php">Patients</a>&nbsp;&nbsp;
			 <br><br>
		</div>
		<div>
			<h3>Doctors</h3>
		</div>
		<div>
				
				<input type="text" id="search" name="search" placeholder="Type doctors name...." onkeyup="liveSearch(this)">
						
		</div>
		<div id="suggestion"></div>	
		<br>
		<div>
			<form action="" method="post"><input type="submit" name="logout" value="Logout"></form>
		</div>
		<script src="js/doctorSearch.js">
			
		</script>
	</body>
</html>