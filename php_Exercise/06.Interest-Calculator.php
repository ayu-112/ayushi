


6: Simple Interest Calculator
Formula: SI = (P * R * T) / 100.

<!DOCTYPE html>
<html>
<head>
    <title>6: Simple Interest Calculator
</title>
</head>
<body>

<h2> Simple Interest Calculator
</h2>

<form method="post">
   <div class="form-group">
    <label for="exampleInputEmail1">principle</label>
    <input type="number" name="principle" class="form-control" placeholder="principle" required>
  </div>

  <var>
      <div class="form-group">
    <label for="exampleInputEmail1">rate</label>
    <input type="number" name="rate" class="form-control" placeholder="rate" required>
  </div>

        <div class="form-group">
    <label for="exampleInputEmail1">time</label>
    <input type="number" name="time" class="form-control" placeholder="time" required>
  </div>
  </var>
    <input type="submit" name="btn" value="check interest">
</form>

<?php
if (isset($_POST['btn'])) {

    $principle = $_POST['principle'];
  $rate = $_POST['rate'];
    $time = $_POST["time"];


   $SI = ( $principle *  $rate * $time) / 100;

  echo "  $SI";
}
?>

</body>
</html>
