 <!-- 6. Create a textbox and button, copy input value into another textbox.   -->

 <!DOCTYPE html>
<html>
<head>
  <title>Replace Heading Text</title>
</head>
<body>
<input type="text" id="num" placeholder="Enter new heading text"> 
<button onclick = "abctxt()">type txt</button>

<input type="text" id="num2" placeholder="Enter new heading text"> 

  <script>

    function abctxt(){
        newtxt = document.getElementById("num").value;
document.getElementById("num2").value = newtxt;
    }
   
  </script>

</body>
</html>