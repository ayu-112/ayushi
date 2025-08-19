8: Check Positive or Negative
Input a number and check whether it is positive, negative, or zero.


<!DOCTYPE html>
<html>
<head>
    <title>Check Positive or Negative
</title>
</head>
<body>

<h2> Check Positive or Negative
</h2>

<form method="post">
   <div class="form-group">
    <label for="exampleInputEmail1">number</label>
    <input type="number" name="n1" class="form-control" placeholder="number" required>
  </div>


    <input type="submit" name="btn" value="check number">
</form>

<?php
if (isset($_POST['btn'])) {

$n1 = $_POST['n1'];


if($n1 > 0){
    echo "<p>$n1 positive</P>";
}else if($n1 < 0){
echo "<p>$n1 is negative</p>";
}else{
    echo "<p>$n1 is zero</p>";
}
}
?>

</body>
</html>
