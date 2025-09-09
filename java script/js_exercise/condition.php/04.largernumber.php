<!-- 4. Compare two numbers and show the larger one. -->




<!DOCTYPE html>
<html>
<head>
    <title>Check largerone</title>
</head>
<body>

    <!-- <h2>Check</h2> -->


    <input type="number" id="numcheck1">

       <input type="number" id="numcheck2">

    <button onclick="checknumber()">check</button>
    


    <p id="result"></p>

    <script>
        function checknumber(){

           
            let x = document.getElementById("numcheck1").value;
            let y = document.getElementById("numcheck2").value;
            //    age1 = Number(age1); 

            if(y > x){
                document.getElementById("result").innerText = "larger";
            }else if (x>y){
                 document.getElementById("result").innerText = "smaller";
            }else{
                 document.getElementById("result").innerText = "equal";
            }
        }
      
    </script>

</body>
</html>




