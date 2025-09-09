<!-- 4.	4) Reverse order (for loop, count down)
Goal: print fruits from last to first.
 -->

 <?php
 
 $fruits = ["APPLE", "BANANA", "ORANGE", "MANGO"];

 for($i = count($fruits) - 1; $i>=0; $i--){
    echo $fruits[$i]. "<br>";
 }
 
 
 
 ?>