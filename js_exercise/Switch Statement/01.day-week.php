<!-- 1. Print day of the week from number(1–7). -->

<!DOCTYPE html>
<html>
<head>
    <title>Day of the Week</title>
</head>
<body>

    <h2>Enter a number (1–7) to get the day</h2>

    <input type="number" id="monthname" min="1" max="7">
    <button onclick="showmonth()">Show Day</button>

    <p id="result"></p>

    <script>
        function showmonth() {
            let dayNumber = Number(document.getElementById("monthname").value);
            let dayName = "";

            switch(dayNumber) {
                case 1: dayName = "Sunday";
                document.getElementById("result").innerText = dayName;
                 break;
                case 2: dayName = "Monday";
                document.getElementById("result").innerText = dayName;
                 break;
                case 3: dayName = "Tuesday"; 
                document.getElementById("result").innerText = dayName;
                break;
                case 4: dayName = "Wednesday";
                document.getElementById("result").innerText = dayName;
                 break;
                case 5: dayName = "Thursday"; 
                document.getElementById("result").innerText = dayName;
                break;
                case 6: dayName = "Friday";
                document.getElementById("result").innerText = dayName;
                 break;
                case 7: dayName = "Saturday";
                document.getElementById("result").innerText = dayName;
                 break;
                default: dayName = "Invalid input. Please enter a number from 1 to 7.";
            }

           
        }
    </script>

</body>
</html>



