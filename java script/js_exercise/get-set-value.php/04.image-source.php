   <!-- 4. Change image source when button is clicked.   -->  


   <!DOCTYPE html>
<html>
<head>
  <title>change image</title>
</head>
<body>

<img id="changeimg" src="https://via.placeholder.com/150" alt="Image" width="150" height="150" alt=>



 <button onclick="changeHeading()">Change image</button>

  <script>
    function changeHeading(){

        img = document.getElementById("changeimg").src = "https://via.placeholder.com/150/ff0000/ffffff?text=New+Image";


    }
  
  </script>

</body>
</html>
