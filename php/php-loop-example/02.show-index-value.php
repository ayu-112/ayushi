<!-- 2.	2) Show index + value (foreach with key)
Goal: `0: Apple`, `1: Banana`, …
Starter:
foreach ($fruits as $i => $name) {
    // echo "$i: $name"
} -->


<?php

$fruits = ["Apple", "Mango", "orange", "banana"];

foreach($fruits as $index => $fruit){
    echo $index . "=>" . $fruit . "<br>";
}


?>