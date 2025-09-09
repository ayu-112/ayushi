<!-- 8. Check if a number is between 1 and 100. -->

<!DOCTYPE html>
<html>
<head>
    <title>Check </title>
</head>
<body>

    <!-- <h2>Check</h2> -->


    <input type="number" id="checknum">
    <button onclick="charectar()">check</button>
    


    <p id="result"></p>

    <script>
        function charectar(){
            let numbers = document.getElementById("checknum").value;
            //    age1 = Number(age1); 

            if(numbers >= 1 && numbers <= 100){
                document.getElementById("result").innerText = "Number is between 1 and 100.";
            }else{
                 document.getElementById("result").innerText = "Number is not between 1 and 100.";
            }
        }
      
    </script>

</body>
</html>
