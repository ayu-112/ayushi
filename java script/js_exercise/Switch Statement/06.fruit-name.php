<!-- 6. Choose fruit name → print its price.  -->


<!DOCTYPE html>
<html>
<head>
  <title>fruit name</title>
</head>
<body>
  <input type="text" id="fruit" placeholder="Enter grade" >
  <button onclick="fruitname()">Check fruit</button>

  <h3 id="meaning"></h3>

  <script>
    function fruitname() {
        const gradeInput = document.getElementById("fruit").value;
      let message;


      switch (gradeInput) {

        case 'apple':
          message = "20rs";
          break;
        case 'banana':
           message = "30rs";   
          break;
        case 'mango':
          message = "100rs";
          break;
           case 'orange':
          message = "50rs";
          break;
      
        default:
          result = "Invalid";
      }

       document.getElementById("meaning").innerText = message;
    }
  </script>
</body>
</html>
