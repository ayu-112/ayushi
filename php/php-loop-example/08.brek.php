<!-- 8.	8) Stop at Mango (break)
Goal: print until you reach Mango (don’t print Mango). -->


<?php
$fruits = ["Apple", "Banana", "Orange", "Mango"];

foreach ($fruits as $f) {
    if ($f === "Mango") continue;
    echo $f . "<br>";
}
?>