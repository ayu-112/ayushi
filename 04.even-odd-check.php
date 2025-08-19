4: Even/Odd Check with Modulus
Take a number and check if it is even or odd using %.


<!DOCTYPE html>
<html>
<head>
    <title>Even/Odd</title>
</head>
<body>

<h2>Check Even/Odd</h2>

<form method="post">
   <div class="form-group">
    <label for="exampleInputEmail1">number</label>
    <input type="number" name="check" class="form-control" placeholder="number" required>
  </div>
    <input type="submit" name="btn" value="check number">
</form>

<?php
if (isset($_POST['btn'])) {
    $number = $_POST["check"];
  
if( $number % 2 == 0){
    echo "$number is even";
}else
   echo "$number is odd";
}
?>

</body>
</html>
