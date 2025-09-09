<!-- 3.	3) Print using for loop
Goal: same as #1 but with for.
Starter:
for ($i = 0; $i < /* length */; $i++) {
    // use $fruits[$i]
} -->


<?php

$fruits = ["Apple", "Banana", "orange", "Mango"];


for($i=0; $i<count($fruits); $i++){
    echo $fruits[$i];
}




 ?>