<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<div>
    <form method="post" action="" name="frmmedicine" onsubmit="return validateform()">
    <table>
        <tr>
          <td>Medicine Name</td>
          <td><input type="text" name="medicinename" value="" />
          <span id="medicinename"></span></td>
        </tr>
        <tr>
          <td>Medicine cost</td>
          <td><input type="number" name="medicinecost" value="" />
          <span id="medicinecost"></span></td>
        </tr>
        <tr>
          <td>Description</td>
          <td><textarea name="description"></textarea>
          <span id="description"></span></td>
        </tr>
        <tr>
          <td>Quantity</td>
          <td><input type="number" name="quantity" value=""/>
          <span id="quantity"></span></td>
        </tr>
        <tr>
          <td colspan="2" align="center"><input type="submit" name="add" id="add" value="Add" /></td>
        </tr>
    </table>
    </form>
	</div>
  <a href="pharmacyProfile.php">Back</a>
  <script src="js/addMedicineValidation.js"></script>
</body>
</html>


