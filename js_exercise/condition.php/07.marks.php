<!-- 7. If marks ≥ 35 → “Pass” else → “Fail”. -->



<!DOCTYPE html>
<html>
<head>
    <title>Check marks</title>
</head>
<body>

    <!-- <h2>Check</h2> -->


    <input type="text" id="marks">
    <button onclick="checkmarks()">check</button>
    


    <p id="result"></p>

    <script>
        function checkmarks(){
            let marksch = document.getElementById("marks").value;
            //    age1 = Number(age1); 

            if(marksch >= "35"){
                document.getElementById("result").innerText = "Pass";
            }else{
                 document.getElementById("result").innerText = "fail";
            }
        }
      
    </script>

</body>
</html>




