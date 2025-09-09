<!-- 11. Age-Based Ticket Pricing
Children < 12 = half price, Senior > 60 = 30% discount, else full price. -->



<?php

if(isset($_POST['submit'])){
 $age = $_POST['age'];
  if($age < 12){
    echo " half price";
  }elseif($age > 60){
    echo "30% discount";
  }else{
    echo "full price.";
  }

}






?>



<!DOCTYPE html>
<html>
<head>
    <title>Order Minimum Check</title>
</head>
<body>
    <h2>User Subscription</h2>

    <form method="post" action="">
        <label>age</label><br>
        <input type="text" name="age" required><br><br>

      

        <input type="submit" name="submit" value="check">
    </form>
</body>
</html>