11: Leap Year Check
Check if a given year is a leap year.


<!DOCTYPE html>
<html>
<head>
    <title> Leap Year
</title>
</head>
<body>

<h2>  Leap Year
</h2>

<form method="POST">
  <div class="form-group" >
    <label for="exampleInputEmail1">Leap Year</label>
    <input type="number" name="leapyear" class="form-control" placeholder="year">
  
  </div>
  <!-- <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control"  placeholder="Password">
  </div> -->

  <button type="submit" name="btn" class="btn btn-primary">Submit</button>
</form>

<?php

if(isset($_POST['btn'])){
    $year = $_POST['leapyear'];

if($year % 4 == 0){
    echo "$year is leap year";
}else{
     echo "$year is not leap year";
}

}


?>


</body>
</html>
