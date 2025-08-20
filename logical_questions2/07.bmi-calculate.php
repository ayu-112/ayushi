<!-- 7. BMI Calculator
Formula: BMI = Weight(kg) / (Height(m)^2). -->



<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $weight = (float)$_POST['weight'];
      $height = (float)$_POST['height'];

    $bmi = $weight / ($height * $height);
       $bmi = round($bmi, 2);
    echo $bmi;
}
  


?>

<!DOCTYPE html>
<html>
<head>
    <title>BMI Calculator</title>
</head>
<body>
    <h2>BMI Calculator</h2>

    <form method="post" action="">
        <label>Enter weight</label><br>
        <input type="number" name="weight" step="any" required><br><br>

        <label>Enter height</label><br>
        <input type="number" name="height" step="any" required><br><br>

        <input type="submit" value="Convert">
    </form>

  
</body>
</html>
