
22.Simple Calculator
Input two numbers and an operator (+,-,*,/) and calculate result using switch.


<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>
    <h2>Simple Calculator</h2>

    <form method="post">
        <label for="color">Enter first number</label><br><br>
        <input type="text" name="first"  required><br><br>

        <label for="color">Enter operators number</label><br><br>
        <input type="text" name="operators"  required><br><br>

        <label for="color">Enter second number</label><br><br>
        <input type="text" name="second"  required><br><br>


        <input type="submit" value="Submit">
    </form>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fnumber = (float)($_POST["first"]);
         $operator = ($_POST["operators"]);
          $snumber = (float)($_POST["second"]);


echo  "result";
switch($operator) {
    case "+":
        echo "$fnumber + $snumber =" .($fnumber + $snumber);
        break;
        case "-":
        echo "$fnumber - $snumber =" .($fnumber - $snumber);
        break;
        case "*":
        echo "$fnumber * $snumber =" .($fnumber * $snumber);
        break;
        case "/":
        echo "$fnumber / $snumber =" .($fnumber / $snumber);
        break;
        case "%":
        echo "$fnumber % $snumber =" .($fnumber % $snumber);
        break;
}
  

// switch ($operator) {
//     case '+':
//         $result = $num1 + $num2;
//         echo "Result: $num1 + $num2 = $result\n";
//         break;
//     case '-':
//         $result = $num1 - $num2;
//         echo "Result: $num1 - $num2 = $result\n";
//         break;
//     case '*':
//         $result = $num1 * $num2;
//         echo "Result: $num1 * $num2 = $result\n";
//         break;
//     case '/':
//         if ($num2 == 0) {
//             echo "Error: Division by zero is not allowed.\n";
//         } else {
//             $result = $num1 / $num2;
//             echo "Result: $num1 / $num2 = $result\n";
//         }
//         break;
//     default:
//         echo "Invalid operator. Please use +, -, *, or /.\n";
}

?>
