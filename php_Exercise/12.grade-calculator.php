12: Grade Calculator
Input marks (0–100) and display grade:

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
    <label for="exampleInputEmail1">marks</label>
    <input type="number" name="mark" class="form-control" placeholder="mark">
  
  </div>
  <!-- <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control"  placeholder="Password">
  </div> -->

  <button type="submit" name="btn" class="btn btn-primary">Submit</button>
</form>

<?php

if(isset($_POST['btn'])){
    $mark = $_POST['mark'];

if($mark >= 90){
    echo "A Grade";
}elseif($mark >= 75 && $mark <= 89 ){
     echo "B Grade";
}elseif($mark >= 50 && $mark <= 74 ){
     echo "c Grade";
}else($mark <= 50){
    echo "fail";
}

}


?>


</body>
</html>
