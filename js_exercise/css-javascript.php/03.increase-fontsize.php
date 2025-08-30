    <!-- 3. Increase font size of text. -->

       <!DOCTYPE html>
<html>
<head>
  <title>inrease font size</title>
</head>
<body>

  <p id="myParagraph">This is a paragraph. Click the button to change font size.</p>

  <button onclick="fontsize()">Change font size</button>

  <script>
    function fontsize() {
      document.getElementById("myParagraph").style.fontSize = "20px";
    }
  </script>

</body>
</html>