<!-- 2. Check if a number is even or odd. -->
 <!-- 1.Check if a number is positive or negative. -->

<!DOCTYPE html>
<html>
<head>
    <title>Check Number Sign</title>
</head>
<body>

    <h2>Check if a Number is Even or Odd</h2>


    <input type="number" id="evodd">
    <button onclick="checkNumber()">check</button>
    


    <p id="result"></p>

    <script>
        function checkNumber() {
            let number = document.getElementById("evodd").value;

            if (number / 2 == 0) {
                document.getElementById("result").innerText = "The number is Even.";
         
            } else {
                document.getElementById("result").innerText = "The number is odd.";
            }
        }
    </script>

</body>
</html>




