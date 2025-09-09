<!-- 6. Check if username input is not empty → “Valid / Invalid”. -->


<!DOCTYPE html>
<html>
<head>
    <title>Check username</title>
</head>
<body>

    <!-- <h2>Check</h2> -->


    <input type="text" id="notempty">
    <button onclick="username()">check</button>
    


    <p id="result"></p>

    <script>
        function username(){
            let uname = document.getElementById("notempty").value;
            //    age1 = Number(age1); 

            if(uname !== ""){
                document.getElementById("result").innerText = "Valid";
            }else{
                 document.getElementById("result").innerText = "InValid";
            }
        }
      
    </script>

</body>
</html>




