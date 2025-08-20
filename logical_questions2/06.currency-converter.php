<!-- 6. Currency Converter -->
<!-- Convert USD to INR using exchange rate variable. -->



<?php
$convertedAmount = '';
$rate = 83.25; // Example exchange rate: 1 USD = 83.25 INR

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usd = (float)$_POST['usd_amount'];
    $convertedAmount = $usd * $rate;
    echo $convertedAmount;
}
  


?>

<!DOCTYPE html>
<html>
<head>
    <title>USD to INR Converter</title>
</head>
<body>
    <h2>Currency Converter: USD to INR</h2>

    <form method="post" action="">
        <label>Enter amount in USD:</label><br>
        <input type="number" name="usd_amount" step="any" required><br><br>
        <input type="submit" value="Convert">
    </form>

  
</body>
</html>
