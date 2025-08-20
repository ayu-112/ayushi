16: Sum of First 10 Natural Numbers
Use while loop to calculate sum.


<!DOCTYPE html>
<html>
<head>
    <title> while loop
</title>
</head>
<body>

<h2>while loop
</h2>




<?php
$sum = 0;
$i = 1;

while ($i <= 10) {
    $sum += $i; // add $i to $sum $sum = $sum + $i;
    $i++;       // increment $i
}

echo "Sum of first 10 natural numbers is: $sum";
?>





</body>
</html>









