<!-- 1. Get value from < input > and display it in a < p >.   -->



<!DOCTYPE html>
<html>
<head>
  <title>Display Input Value</title>
</head>
<body>

  <h2>Enter Text Below:</h2>
  <input type="text" id="myInput" placeholder="Type something...">
  <button onclick="displayValue()">Show in Paragraph</button>

  <p id="output"></p> <!-- Output will appear here -->

  <script>
    function displayValue() {
      const inputValue = document.getElementById("myInput").value;
      document.getElementById("output").textContent = inputValue;
    }
  </script>

</body>
</html>
