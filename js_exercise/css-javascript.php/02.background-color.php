 <!-- 2.  Change background color of body.   -->
   <!DOCTYPE html>
<html>
<head>
  <title>Change Text Color</title>
</head>
<body>

  <p id="myParagraph">This is a paragraph. Click the button to change background color.</p>

  <button onclick="changeColor()">Change BGColor</button>

  <script>
    function changeColor() {
      document.getElementById("myParagraph").style.backgroundColor = "green";
    }
  </script>

</body>
</html>