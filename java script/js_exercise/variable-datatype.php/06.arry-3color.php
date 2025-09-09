

<!-- 6. Create an array of 3 colors and show them on the page. -->


<!DOCTYPE html>
<html>
<head>
   
</head>
<body>

    <h2>Enter color</h2>
    
   


    <p id="color"></p>

    <script>
 
      
          var color = ["red","green","blue"];
          var colortxt = color.join(" ");

           

            document.getElementById("color").innerText = "color : " + colortxt;

    </script>

</body>
</html>
