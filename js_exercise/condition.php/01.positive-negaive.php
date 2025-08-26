<!-- 1.Check if a number is positive or negative. -->

<!DOCTYPE html>
<html>
<head>
    <title>Check Number Sign</title>
</head>
<body>

    <h2>Check if a Number is Positive or Negative</h2>


    <input type="number" id="numinput">
    <button onclick="checkNumber()">check</button>
    


    <p id="result"></p>

    <script>
        function checkNumber() {
            let number = document.getElementById("numinput").value;

            if (number > 0) {
                document.getElementById("result").innerText = "The number is Positive.";
            } else if (number < 0) {
                document.getElementById("result").innerText = "The number is Negative.";
            } else {
                document.getElementById("result").innerText = "The number is Zero.";
            }
        }
    </script>

</body>
</html>




