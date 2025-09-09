  <!-- 4. Add border around a <div>.   -->

  <!DOCTYPE html>
<html>
<head>
  <title>Add Border</title>
</head>
<body>

  <div id="myDiv" style="padding: 20px;">
    This is a div. Click the button to add a border.
  </div>

  <br>

  <button onclick="addBorder()">Add Border</button>

  <script>
    function addBorder() {
      document.getElementById("myDiv").style.border = "2px solid black";
    }
  </script>

</body>
</html>
