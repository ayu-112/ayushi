14: Login Validation
Hardcode a username and password, ask user input, check if login is successful.


<!DOCTYPE html>
<html>
<head>
    <title> Login Validation
</title>
</head>
<body>

<h2> Login Validation
</h2>

<form method="POST">
  <div class="form-group" >
    <label for="exampleInputEmail1">username</label>
    <input type="text" name="username" class="form-control" placeholder="username">
  
  </div>

  <div class="form-group" >
    <label for="exampleInputEmail1">password</label>
    <input type="number" name="password" class="form-control" placeholder="password">
  
  </div>


  <button type="submit" name="btn" class="btn btn-primary">Submit</button>
</form>

<?php

$uname = "admin";
$pass = 123;

if(isset($_POST['btn'])){
    $username = $_POST['username'];
     $password = $_POST['password'];

if($username == $uname && $password == $pass){
    echo "Login successful! Welcome, $username.";


}else{
    echo "Login failed.";
}

}


?>


</body>
</html>
