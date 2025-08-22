<!-- 10. Order Minimum Check
If order amount < 500 → add delivery charges, else free delivery. -->



<?php

if(isset($_POST['submit'])){
 $amount = $_POST['amount'];
  if($amount < 500){
    echo "add delivery charges";
  }else{
    echo "free delivery";
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
        <label>amount</label><br>
        <input type="text" name="amount" required><br><br>

      

        <input type="submit" name="submit" value="check">
    </form>
</body>
</html>