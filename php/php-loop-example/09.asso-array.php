<!-- 9.	9) Loop associative array (prices)
Goal: print `Apple: 120`, `Banana: 40`, …
Starter:
foreach ($prices as $fruit => $price) {
    // echo "$fruit: $price"
} -->


<?php

$fruits = [
    "Apple" => 120,
     "Banana" => 40, 
      "Orange" => 52,
       "Mango" =>  60
    ];
foreach($fruits as $f => $price){
    echo "$f => $price";
}




?>