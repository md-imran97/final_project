<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="wrapper col2">
	<div>
		<a href="">Home</a>
		&nbsp;
		<a href="medicineInfo.php">Medicine Info</a>
		&nbsp;
		<a href="sales.php">Sales</a>
		&nbsp;
		<a href="profit.php">Profit</a>
		&nbsp;
		
	</div>
</div>
<br>
<div class="wrapper col4">
  <div id="container">
      <form class="" action="">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit">Search</button>
      </form>
  </div>
  
  <div>
    <p>&nbsp;</p>
  </div>
  </div>
  <div>
    <h1>Add selling Medicine record</h1>
    <form method="post" action="" name="frmmedicine" onsubmit="return validateform()">
    <table>
      <tbody>
        <tr>
          <td>Medicine Name</td>
          <td><input type="text" name="medicinename"value="" />
          <span id="medicinename"></span></td>
        </tr>
        <tr>
          <td>Medicine Price</td>
          <td><input type="number" name="medicinecost"value="" />
          <span id="medicinecost"></span></td>
        </tr>
        <tr>
          <td>Patient Id</td>
          <td><input type="text" name="Id" value=""/>
          <span id="Id"></span></td>
        </tr>
        <tr>
          <td>Quantity</td>
          <td><input type="number" name="quantity" value=""/>
          <span id="quantity"></span></td>
        </tr>
        <tr>
          <td><input type="submit" name="submit" id="submit" value="Submit" /></td>
        </tr>
      </tbody>
    </table>
    </form>
	</div>
	<a href="">LogOut</a>
	
  <script src="js/pharmacyProfileValidation.js"></script>
</body>
</html>