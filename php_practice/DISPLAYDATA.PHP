QA 1: Write a PHP script to display 'Hello World'.
<?php echo 'HELLO WORLD.'; ?>

QA 2:Write a PHP script to display the result of 5 + 3.

<?php $x = 5;
       $y =3;

       echo $x. " + ". $y; ?>

QA 3: Display your server's PHP version using PHP code.

<?php echo 'PHP version:' .phpversion(); ?>

QA 4: Use echo to print your name and age in a single statement.

<?php $name = 'AYUSHI';
       $age = "25";

       echo $name .' '.  $age; ?>

QA 5: Display today's date in 'YYYY-MM-DD' format using PHP.

<?php echo date('y-m-d');  ?>

QA 6: Print a sentence using both echo and print in PHP.

<?php 
           echo 'HELLO,' ;
           print 'world!';

?>

QA 7: Write a PHP script to output HTML <h1> tag with your name inside it.

<?PHP echo  '<h1>AYUSHI</h1>'; ?>

QA 8: Display a number with two decimal places using PHP

QA 9: Output a multi-line string using PHP's here doc syntax.

<?php
echo <<<EOD
This is a multi-line string.
You can write as many lines as you want,
and variables like \$var will not be parsed unless you include them.

Have a great day!
EOD;
?>

QA 10: Write a PHP script to show the current file name being executed.

<?php echo "Full path: " . __FILE__ . "<br>";
                 echo "File name: " . basename(__FILE__);
?>

