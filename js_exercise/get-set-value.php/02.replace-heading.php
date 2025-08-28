<!-- 2. Replace heading text(<h1>) with new text on button click.   -->

<!DOCTYPE html>
<html>
<head>
  <title>Replace Heading Text</title>
</head>
<body>

  <h1 id="mainHeading">Original Heading</h1>

  <input type="text" id="headingInput" placeholder="Enter new heading text">
  <button onclick="changeHeading()">Change Heading</button>

  <script>
    function changeHeading() {
      const newText = document.getElementById("headingInput").value;
      document.getElementById("mainHeading").texsrctContent = newText;
    }
  </script>

</body>
</html>
