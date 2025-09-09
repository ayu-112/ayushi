<!-- 9. Check if entered password is equal to "12345". -->


<!DOCTYPE html>
<html>
<head>
    <title>Check </title>
</head>
<body>

    <!-- <h2>Check</h2> -->


    <input type="number" id="checknum">
    <button onclick="checkpass()">check</button>
    


    <p id="result"></p>

    <script>
        function checkpass(){
            let password = document.getElementById("checknum").value;
            //    age1 = Number(age1); 

            if(password == "12345"){
                document.getElementById("result").innerText = "password is correct";
            }else{
                 document.getElementById("result").innerText = "password is incorrect.";
            }
        }
      
    </script>

</body>
</html>
