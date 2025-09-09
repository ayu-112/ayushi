<!-- 7.	7) Skip a fruit (continue)
Goal: print all fruits except Banana.
Starter:
foreach ($fruits as $f) {
    if ($f === "Banana") /* skip */;
    // echo $f
}
 -->

<?php
$fruits = ["Apple", "Banana", "Orange", "Mango"];

foreach ($fruits as $f) {
    if ($f === "Banana") continue;
    echo $f . "<br>";
}
?>

