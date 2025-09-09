<!-- 2. Print month name from number(1–12). -->

<!DOCTYPE html>
<html>
<head>
    <title>month name</title>
</head>
<body>

    <h2>Enter a number (1–7) to get the day</h2>

    <input type="number" id="dayInput" min="1" max="12">
    <button onclick="showMonth()">Show Month</button>

    <p id="result"></p>

    <script>
        function showMonth() {
            let monthnumber = document.getElementById("dayInput").value;
            let monthnumber1 = "";

            switch(monthnumber) {
                case 1: monthnumber1 = "january";
                document.getElementById("result").innerText = monthnumber1;
                 break;
                case 2: monthnumber1 = "february";
                document.getElementById("result").innerText = monthnumber1;
                 break;
                case 3: monthnumber1 = "march"; 
                document.getElementById("result").innerText = monthnumber1;
                break;
                case 4: monthnumber1 = "april";
                document.getElementById("result").innerText = monthnumber1;
                 break;
                case 5: monthnumber1 = "may"; 
                document.getElementById("result").innerText = monthnumber1;
                break;
                case 6: monthnumber1 = "june";
monthnumber1                 break;
                case 7: monthnumber1 = "july";
                document.getElementById("result").innerText = monthnumber1;
                 break;

                 case 8: monthnumber1 = "august";
                document.getElementById("result").innerText = monthnumber1;
                 break;
                 case 9: monthnumber1 = "septrmber";
                document.getElementById("result").innerText = monthnumber1;
                 break;
                 case 10: monthnumber1 = "october";
                document.getElementById("result").innerText = monthnumber1;
                 break;

                 case 11: monthnumber1 = "november";
                document.getElementById("result").innerText = monthnumber1;
                 break;

                 case 12: monthnumber1 = "december";
                document.getElementById("result").innerText = monthnumber1;
                 break;
                default: monthnumber = "Invalid input. Please enter a number from 1 to 12.";
            }

           
        }
    </script>

</body>
</html>



