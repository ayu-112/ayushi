<!-- 14. Product Stock Availability
If stock > 0 → “Available”, else “Out of Stock”. -->


<?php

if(isset($_POST['submit'])){
 $stock = $_POST['stock'];
  if($stock > 0){
    echo "Available";
  
  }else{
    echo "Out of Stock";
  }

}



?>



<!DOCTYPE html>
<html>
<head>
    <title>  Product Stock Availability</title>
</head>
<body>
    <h2> Product Stock Availability</h2>

    <form method="post" action="">
        <label>stock</label><br>
        <input type="text" name="stock" required><br><br>

      

        <input type="submit" name="submit" value="check">
    </form>
</body>
</html>