
7: Swap Two Numbers without Third Variable
Use arithmetic operators + and - to swap values.






<form method="post">
   <div class="form-group">
    <label for="exampleInputEmail1">number</label>
    <input type="number" name="n1" class="form-control" placeholder="number" required>
  </div>

  <var>
    <div class="form-group">
    <label for="exampleInputEmail1">number</label>
    <input type="number" name="n2" class="form-control" placeholder="number" required>
  </div>

  
  </var>
    <input type="submit" name="btn" value="check number">
</form>

















<!-- <!DOCTYPE html>
<html>
<head>
    <title>Swap Two Numbers
</head>
<body>

<h2> Swap Two Numbers
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

        

    <input type="submit" name="btn" value="swap number">
</form> -->

<?php
if (isset($_POST['btn'])) {

  $n1 = $_POST['n1'];
  $n2 = $_POST['n2'];


  $a = 5;
  $b = 3;
 echo "<p>Before swapping: A = $a, B = $b</p>";

  $a = $a + $b;
  $b = $a - $b;
  $a =$a - $b;

  echo "  $a";
  echo "  $b"; 
  echo "  $a";
   echo "<p>after swapping: A = $a, B = $b</p>";
  
}
?>

</body>
</html>
