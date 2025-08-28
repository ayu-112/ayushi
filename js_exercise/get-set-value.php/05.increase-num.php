    <!-- 5.  Increase number inside <span> each time button clicked.   -->


    <!DOCTYPE html>
<html>
<head>
  <title>Replace Heading Text</title>
</head>
<body>
<h2>counter:<span id="counter">0</span></h2>
<button onclick="increasenum()">increase number</button>


    <script>
    function increasenum(){

      const span = document.getElementById("counter");
      let currentValue = parseInt(span.textContent); // Get current number
      span.textContent = currentValue + 1; // Increment and update
    }
  </script>

</body>
</html>