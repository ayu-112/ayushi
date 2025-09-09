23: Vowel or Consonant
Input a character and check if it is a vowel or consonant.


<!DOCTYPE html>
<html>
<head>
    <title>Vowel or Consonant</title>
</head>
<body>
    <h2>Vowel or Consonant</h2>

    <form method="post">
        <label for="color">Enter letter</label><br><br>
        <input type="text" name="letter" maxlength="1" required><br><br>

        <input type="submit" value="Submit">
    </form>


<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $letter = ($_POST["letter"]);

                    switch ($letter) {
                case 'a':
                case 'e':
                case 'i':
                case 'o':
                case 'u':
                    echo "The character '<strong> $letter</strong>' is a <strong>vowel</strong>.";
                    break;
                default:
                    echo "The character '<strong> $letter</strong>' is a <strong>consonant</strong>.";
            }

       



}

?>
