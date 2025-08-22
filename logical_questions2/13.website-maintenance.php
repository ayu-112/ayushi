<!-- 13. Website Maintenance Mode
If $site_status = 'down' → show “Maintenance Mode”, else show site. -->




<?php

$site_status = 'down';

if(isset($_POST['submit'])){
 $Website = $_POST['Website'];
  if($site_status === 'down'){
    echo " Maintenance Mode";
  
  }else{
    echo "welcome site.";
  }

}
?>

<!DOCTYPE html>
<html>
<head>
    <title> Website Maintenance Mode</title>
</head>
<body>
    <h2> Website Maintenance Mode</h2>

    <form method="post" action="">
        <label>Website</label><br>
        <input type="text" name="Website" required><br><br>

      

        <input type="submit" name="submit" value="check">
    </form>
</body>
</html>