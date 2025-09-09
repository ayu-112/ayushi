 <!-- 7.  Rotate an image on button click.   -->

   <!DOCTYPE html>
<html>
<head>
  <title> Rotate an image </title>
</head>
<body>

<img id="imgroat" src="https://via.placeholder.com/150" alt="Placeholder">
  <br>

  <button onclick="rotate()">rotate me</button>

  <script>
    function rotate() {
      document.getElementById("imgroat").style.transform  = "rotate(180deg)";
    }
  </script>

</body>
</html>