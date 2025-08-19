13: Voting Eligibility
Input age and check if eligible for voting (≥18).


<!DOCTYPE html>
<html>
<head>
    <title> Voting Eligibility
</title>
</head>
<body>

<h2> Voting Eligibility
</h2>

<form method="POST">
  <div class="form-group" >
    <label for="exampleInputEmail1">age</label>
    <input type="number" name="age" class="form-control" placeholder="age">
  
  </div>
  <!-- <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control"  placeholder="Password">
  </div> -->

  <button type="submit" name="btn" class="btn btn-primary">Submit</button>
</form>

<?php

if(isset($_POST['btn'])){
    $age = $_POST['age'];

if($age >= 18){
    echo "You can do voting";


}else{
    echo "mota thaine avo";
}

}


?>


</body>
</html>
