QA 1: Convert a string '123' to an integer and display the result.
<?php
$c = "123";
$c = (int) $c;
echo var_dump($c);

?>

 
QA 2: Convert the float 45.67 to an integer and display it.
 <?php
 $x = 12.8;
 $x = (int) $x;
 echo var_dump($x);

 ?>

 QA 3: Cast an integer to a string and check its type.
 <?php

 $s = 25;
 $s = (string) $s;
 echo gettype($s);
?>

QA 4: Convert a boolean true to an integer and display it.
<?php

$a = true;
$a = (int) $a;
 echo var_dump($a);
 ?>

 
QA 5: Change a numeric string '100.5' to a float and display.
<?php

$x = "100.5";
$x = (float) $x;
echo var_dump($x);
?>


QA 6: Convert an array with one element to an object.
<?php  
?>


QA 7: Type cast NULL to a string and display it.
<?PHP 
$abc = NULL;
$abc = (string) $abc;
echo var_dump($abc);
?>


QA 8: Cast a float to a Boolean and display the result.
<?php 
 $val = 34.9;
 $val = (bool) $val;
 echo var_dump($val);
 ?>


QA 9: Cast a string '0' to boolean and check its value.
<?php

$test = "0";
$test = (bool) $test;
echo var_dump($test);
?>


QA 10:Convert a string with letters to an integer and see the result.
<?php 
$a ="abc";
$a = (int) $a;
echo var_dump($a);
?>