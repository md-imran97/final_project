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
    <table width="800">
      <tbody>
        <tr>
          <td width="34%">Medicine Name</td>
          <td width="66%"><input type="text" name="medicinename" value="" />
          <span id="medicinename"></span></td>
        </tr>
        <tr>
          <td width="34%">Medicine cost</td>
          <td width="66%"><input type="number" name="medicinecost" value="" />
          <span id="medicinecost"></span></td>
        </tr>
        <tr>
          <td>Description</td>
          <td><textarea name="description" cols="45" rows="5"></textarea>
          <span id="description"></span></td>
        </tr>
        <tr>
          <td>Quantity</td>
          <td><input type="number" name="quantity" value=""/>
          <span id="quantity"></span></td>
        </tr>
        <tr>
          <td colspan="2"><input type="submit" name="delete" id="delete" value="Delete" /></td>
        </tr>
      </tbody>
    </table>
    </form>
	</div>
  <a href="medicine.php">Back</a>
  <script src="js/deleteMedicineValidation.js"></script>
</body>
</html>

