<!-- 5.	5) while loop listing
Goal: print all fruits with a - prefix.
Starter: -->

<?php
$fruits = ["Apple", "Banana", "Orange", "Mango"];
$i = 0;

while ($i < count($fruits)) {
    echo "-" . $fruits[$i] . "<br>";
    $i++;
}
?>
