QA1 : Declare a variable $name with your name and display it.

<?php $name = 'Ayushi';
       echo $name;
?>
 QA 2: Assign a number to $x and display it twice using a single echo
 
 <?php $x = 10;
     echo $x . ' ' . $x;
 ?>

 QA 3: Store the sum of 10 and 20 in a variable and display it.
 
 
 <?php $x = 10;
 $y = 20;

 $z = $x+$y;

 echo $x . '+' . $y; 
 echo $z?>;


QA 4: Swap the values of two variables without using a third variable.

 QA 5: Create a variable with your birth year and calculate your age.
 
 <?php
            $birthyear = '2000';
            $currentyear = date('Y');
$age = $currentyear  - $birthyear;
            echo $age;


?>


QA 6:  Check if a variable is set using isset().

QA 7: Unset a variable and try to display it.

<?php $a = 'hello';
   echo   "The is set " . $a ;
   unset($a);
    echo   "The is unset " . $a ;
   ?>


QA 8: Declare a variable inside a function and try to access it outside.

<?php  function test(){
  $name1 = 'xyz';
echo $name1; //run
}

test();
echo $name1; //error

?>

QA 9: Use variable variables ($$var) to display a value.

 <?php
         $x = "xyz"; //xyz
         $xyz = 3;
         $y =  $x ; // xyz
        $z =  $$y; // 3

        echo $z;
?>

QA 10: Concatenate two strings stored in variables and display.
<?php $str1 = "ayushi";
$str2 = "patel";
echo $str1 . $str2;
?>



