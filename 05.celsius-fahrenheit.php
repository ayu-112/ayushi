5: Convert Celsius to Fahrenheit
Formula: F = (C * 9/5) + 32.




<!DOCTYPE html>
<html>
<head>
    <title>Celsius to Fahrenheit</title>
</head>
<body>

<h2>Check Celsius to Fahrenheit</h2>

<form method="post">
   <div class="form-group">
    <label for="exampleInputEmail1">number</label>
    <input type="number" name="celsius" class="form-control" placeholder="number" required>
  </div>
    <input type="submit" name="btn" value="check number">
</form>

<?php
if (isset($_POST['btn'])) {
    $celsius = $_POST["celsius"];
  $Fahrenheit = ($celsius * 9/5) + 32;

  echo "$Fahrenheit";
}
?>

</body>
</html>
