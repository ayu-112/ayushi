      <!-- 5. Toggle between two colors (red/blue) on click.   -->

      <!DOCTYPE html>
<html>
<head>
  <title>Toggle Color</title>
</head>
<body>

  <p id="colorText">Click the button to toggle my color (Red / Blue)</p>

  <button onclick="toggleColor()">Toggle Color</button>

  <script>
    function toggleColor() {
      const text = document.getElementById("colorText");
      const currentColor = text.style.color;

      if (currentColor === "red") {
        text.style.color = "blue";
      } else {
        text.style.color = "red";
      }
    }
  </script>

</body>
</html>
