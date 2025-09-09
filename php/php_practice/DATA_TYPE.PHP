QA 1: Create a variable with an integer value and check its type.

<?php  $x = 40;
echo var_dump($x);              ?>

QA 2: Store a floating-point number in a variable and display it.

<?php $y = 40.5;
echo var_dump($y);    ?>

QA 3: . Assign a string to a variable and get its length

<?php  $str = "ayushi patel"; 
echo var_dump($str) ;                      ?> 

QA 4 ; Create an array of 5 fruits and display the second one.

<?php  $array = ['apple', 'orange', 'banana', 'kiwi', 'mango'];
     echo $array[1];                        ?>


QA 5: Create an associative array and print its keys.

 <?php  $person = ["age" => 123,
                         "name" => "xyz",
                        "fun" => "123dfrdg"
];

foreach($person as $key => $value){
    echo $key. " => ". $value;
}
      ?>


QA 6: Declare a boolean variable and display its value.

 <?php $val = 'true';
echo var_dump($val);?>


QA 7: Assign NULL to a variable and check its type.

<?php $x = NULL;
ECHO var_dump($x);  ?>




QA 8: Use gettype() to display the data type of a variable

   <?php   $x = 3;
   $y = 3.5;
   $z = false;
   $f = "hello";
   $h = NULL;
      

   echo gettype($x);
   echo gettype($y);
   echo gettype($z);
   echo gettype($h);
   echo gettype($f);  ?>



QA 9: Check if a variable is an array using is_array().

<?php  $x = "hello";
        echo "a is" . is_array($x) . "<br>";

        $a1 = array("hello");
        echo "y is" . is_array($a1) . "<br>";

$b = array("red", "green", "blue");
echo "b is " . is_array($b) . "<br>";  ?>

QA 10: Display the sum of an integer and a string containing a number.

<?php  $x = 20;
               $str = "30";    
               
             $sum = $x  +  $str;
             echo $sum;

             ?>





