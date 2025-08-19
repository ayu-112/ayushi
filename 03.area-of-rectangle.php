3: Area of a Rectangle
Input length and width, then calculate area using * operator.


<!-- <?php
// $conn = mysqli_connect('localhost', 'root','','registration') or die('connection fail');
// if(isset($_POST['calculate'])){
// $lenght = $_POST['lenght'];
// $width = $_POST['width'];
// $rectangle = $lenght * $width;
// echo $rectangle ;




// }
?>
<form method="POST" action="#">
<div class="form-group">
    <label for="exampleInputEmail1">length</label>
    <input type="number" name="lenght" class="form-control" placeholder="length" required>
  </div>
 <div class="form-group">
    <label for="exampleInputEmail1">width</label>
    <input type="number" name="width" class="form-control" placeholder="width" required>
  </div>

  <button type="submit" name="calculate" class="btn btn-primary">calculate</button>
</form> -->











<!DOCTYPE html>
<html>
<head>
    <title>Area of Rectangle</title>
</head>
<body>

<h2>Calculate Area of a Rectangle</h2>

<form method="post">
    Length: <input type="number" name="length" step="any" required><br><br>
    Width: <input type="number" name="width" step="any" required><br><br>
    <input type="submit" value="Calculate Area">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $length = $_POST["length"];
    $width = $_POST["width"];

    $area = $length * $width;

    echo "<h3>Result:</h3>";
    echo "Length = $length<br>";
    echo "Width = $width<br>";
    echo "Area = $area";
}
?>

</body>
</html>
