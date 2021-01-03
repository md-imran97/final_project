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
		<a href="pharmacyProfile.php">Home</a>
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
	
	<table class="order-table">
      <thead>
   
    <table style="width:100%;" border="3">
      <tbody>
        <tr>
          <td>Medicine Name</td>
          <td>Medicine Cost</td>
          <td>Description</td>
          <td>Quantity</td>
          <td>Price</td>
        </tr>
      </tbody>
    </table>
    <p>&nbsp;</p>
  </div>
  </div>
  <div>
  <a href="addMedicine.php">Add</a>
  <a href="deleteMedicine.php">Delete</a>
</body>
</html>