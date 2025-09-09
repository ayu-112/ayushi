<!-- 10 . Apply multiple styles (color, fontSize, background) with JS.   -->


<!DOCTYPE html>
<html>
<head>
  <title> multiple styles</title>
</head>
<body>
     
 <p id="myText">This paragraph will be shown or hidden when you click the button.</p>


  <button onclick="mulcss()">
Apply Styles
   
  </button>
  <script>


    function mulcss() {
    element = document.getElementById("myText");

     element.style.color = "white";              // Text color
      element.style.fontSize = "24px";            // Font size
      element.style.backgroundColor = "teal";     // Background color
      element.style.padding = "10px";             // Optional: spacing
      element.style.borderRadius = "5px";   

    }

  </script>

</body>
</html>