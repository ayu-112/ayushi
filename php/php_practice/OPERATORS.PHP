QA 1: Assign the sum of 5 and 10 to $x using assignment operator
<?php
$x = 5 +10;
echo $x;
?>

QA 2: . Use shorthand += to add 5 to a variable.
<?php
 $val = 50;
 $val += 5;
echo  $val;
?>

QA 3: Check if both 5 > 3 and 10 > 5 using logical AND.
<?php

if((5>3) AND (10>5)){
    echo "true";

}else{
    echo "false";
}
?>


QA 4: Compare if 10 is equal to '10' using == and ===.
<?php
$a = 10;
$b ='10';
 
 if($a ==$b){
    echo "it's true";
 }else{
    echo "it's false";

 }


 if($a ===$b){
    echo "it's true";
 }else{
    echo"it's false";
 }
 ?>

 QA 5: Use the ternary operator to display 'Even' if a number is even.
 <?php

 $num = 33;

$evennum = ($num / 2 == 0) ? "EVEN " : "not EVEN";
echo $evennum;
?>




QA 6: . Increment a variable from 10 to 11 using pre-increment.
<?php 
$x = 10;
$y = ++$x;
echo $y;?>

QA 7: Decrement a variable from 5 to 4 using post-decrement.
<?php
$a = 5;
$b = $a--;
echo $b;
?>

QA 8: Check if either 2 < 1 or 5 > 2 using logical OR.
<?php
if((2<1) || (5>2)){
    echo "true";

}else{
    echo "false";
}
?>

QA 9: Use shorthand *= to multiply a variable by 3.

<?php  $x = 3;
$x *= 2;
echo $x;
?>

QA 10: Write a one-line ternary statement to check if $age >= 18.
<?php   
$age = 19;
$val = ($age>=18) ? "true" : "false";
echo $val;
?>