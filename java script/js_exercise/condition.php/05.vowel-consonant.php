<!-- 5. Check if a character is vowel or consonant.  -->


<!-- 3. Check if age ≥ 18 → print “Eligible to vote”. -->


<!DOCTYPE html>
<html>
<head>
    <title>Check Age</title>
</head>
<body>

    <!-- <h2>Check</h2> -->


    <input type="text" id="chechch">
    <button onclick="charectar()">check</button>
    


    <p id="result"></p>

    <script>
        function charectar(){
            let letter = document.getElementById("chechch").value;
            //    age1 = Number(age1); 

            if(letter == "a" || letter == "e" || letter == "i" ||  letter == "o"|| letter == "u"){
                document.getElementById("result").innerText = "vowel";
            }else{
                 document.getElementById("result").innerText = "It's a consonant";
            }
        }
      
    </script>

</body>
</html>




