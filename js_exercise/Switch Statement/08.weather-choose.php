<!-- 8. Choose weather type(sunny, rainy, cold) → show message.   -->


<!DOCTYPE html>
<html>
<head>
  <title>weather</title>
</head>
<body>
  <input type="text" id="weathername" placeholder="Enter grade" >
  <button onclick="season()">weather</button>

  <h3 id="meaning"></h3>

  <script>
    function season(){
        const gradeInput = document.getElementById("weathername").value;
      let message;


      switch (gradeInput) {

        case 'summer':
          message = "sunny..!";
          break;
        case 'monsoon':
           message = "rainy..!";   
          break;
        case 'winter':
          message = "cold";
          break;
         
      
        default:
          result = "Invalid";
      }

       document.getElementById("meaning").innerText = message;
    }
  </script>
</body>
</html>

