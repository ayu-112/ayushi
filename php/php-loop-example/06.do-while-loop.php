<!-- 6.	6) do…while once even if empty
Goal: Temporarily set $fruits=[]; and show that do…while runs once. -->


<?php

$fruits = [];
$i = 0;

do{
    echo "This runs even if the array is empty!<br>";
    $i++;
}while ($i < count($fruits));





?>