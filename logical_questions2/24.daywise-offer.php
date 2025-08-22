<!-- 24. Day-Wise Offer System   
If Monday → 10% discount, Friday → Free Shipping, Sunday → Buy 1 Get 1. -->

<?php

$offer = 'Monday'; // change this to 'en', 'fr', 'hi' to test

switch ($offer) {
    case 'Monday':
        $message = "10% discount";
        break;
    case 'Friday':
        $message = "Free Shipping";
        break;
    case 'Sunday':
        $message = "Buy 1 Get 1.";
        break;
    default:
        $message = "no discount"; 
    }
?>

<!DOCTYPE html>
<html lang="<?php echo htmlspecialchars($offer); ?>">
<head>
    <meta charset="UTF-8" />
    <title>Day-Wise Offer System</title>
</head>
<body>
    <h1><?php echo $message; ?></h1>
</body>
</html>
