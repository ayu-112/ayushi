   <!-- 1. Change text color of a paragraph.   -->

   <!DOCTYPE html>
<html>
<head>
  <title>Change Text Color</title>
</head>
<body>

  <p id="myParagraph">This is a paragraph. Click the button to change its color.</p>

  <button onclick="changeColor()">Change Color</button>

  <script>
    function changeColor() {
      document.getElementById("myParagraph").style.color = "blue";
    }
  </script>

</body>
</html>
