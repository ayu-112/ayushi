<!-- 3. Check if age ≥ 18 → print “Eligible to vote”. -->


<!DOCTYPE html>
<html>
<head>
    <title>Check Age</title>
</head>
<body>

    <!-- <h2>Check</h2> -->


    <input type="number" id="ageaaav">
    <button onclick="checkage()">check</button>
    


    <p id="result"></p>

    <script>
        function checkage(){
            let age1 = document.getElementById("ageaaav").value;
            //    age1 = Number(age1); 

            if(age1 > 18){
                document.getElementById("result").innerText = "Eligible to vote.";
            }else{
                 document.getElementById("result").innerText = "mota thaine avo ";
            }
        }
      
    </script>

</body>
</html>




