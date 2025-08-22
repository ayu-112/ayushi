<!-- 
23. Payment Gateway Selector
Switch between PayPal, Stripe, COD. -->


<?php

$payment_method = 'stripe'; // change this to 'en', 'fr', 'hi' to test

switch ($payment_method) {
    case 'stripe':
        $message = "you selected stripe payment method";
        break;
    case 'PayPal':
        $message = "you selected PayPal payment method";
        break;
    case 'COD':
        $message = "you selected COD payment method";
        break;
    default:
        $message = "please select payment method..!"; 
    }
?>

<!DOCTYPE html>
<html lang="<?php echo htmlspecialchars($payment_method); ?>">
<head>
    <meta charset="UTF-8" />
    <title>payment_method Selector</title>
</head>
<body>
    <h1><?php echo $message; ?></h1>
</body>
</html>
