

<!-- 8. Login Authentication
Check username/password against stored values. -->

<?php 

$stored_username = "admin";
$stored_password = "1234";
$message = "";

if(isset($_POST['submit'])){
    $username = $_POST['username'];
     $password = $_POST['password'];

     if($stored_username === $username  &&  $stored_password === $password){
        $message = "login successful..!";
     }else{
          $message = "somthing went wrong...!";
     }


}


?>



<!DOCTYPE html>
<html>
<head>
    <title>Login Authentication</title>
</head>
<body>
    <h2>Login Form</h2>

    <form method="post" action="">
        <label>Username:</label><br>
        <input type="text" name="username" required><br><br>

        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>

        <input type="submit" name="submit" value="Login">
    </form>
</body>
</html>