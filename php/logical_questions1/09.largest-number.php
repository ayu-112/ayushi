9: Largest of Two Numbers
Input two numbers and print the larger one.


<!DOCTYPE html>
<html>
<head>
    <title> Largest of Two Numbers
</title>
</head>
<body>

<h2>  Largest of Two Numbers
</h2>

<form method="post">
   <div class="form-group">
    <label for="exampleInputEmail1">number</label>
    <input type="number" name="n1" class="form-control" placeholder="number" required>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">number</label>
    <input type="number" name="n2" class="form-control" placeholder="number" required>
  </div>


    <input type="submit" name="btn" value="check number">
</form>

<?php
if (isset($_POST['btn'])) {

$n1 = $_POST['n1'];
$n2 = $_POST['n2'];


if($n1 > $n2){
    echo "<p>$n1 is largest</P>";
}else if($n2 > $n1){
echo "<p>$n2 is largest</p>";
}else{
    echo "<p> equal number</p>";
}
}
?>

</body>
</html>
