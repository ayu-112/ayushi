<!-- 9. User Subscription Plan
If user type = premium → show premium content, else show basic. -->


<?php

// $user_type = "premium";


if(isset($_POST['submit'])){
    $type = $_POST['type'];


    if($type == "premium"){
        echo "show premium content";
    }else{
        echo "show basic show";
    }
}



?>















<!DOCTYPE html>
<html>
<head>
    <title>User Subscription</title>
</head>
<body>
    <h2>User Subscription</h2>

    <form method="post" action="">
        <label>text</label><br>
        <input type="text" name="type" required><br><br>

      

        <input type="submit" name="submit" value="Login">
    </form>
</body>
</html>