<!-- 12. Student Result Evaluation
If marks ≥ 90 → Grade A, 75–89 → Grade B, else Fail. -->


<?php

if(isset($_POST['submit'])){
 $marks = $_POST['marks'];
  if($marks >= 90){
    echo " Grade A";
  }elseif($marks <= 89  &&  $marks >= 75){
    echo "Grade B";
  }else{
    echo "Fail";
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
        <label>marks</label><br>
        <input type="text" name="marks" required><br><br>

      

        <input type="submit" name="submit" value="check">
    </form>
</body>
</html>