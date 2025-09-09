<!-- 5. Input traffic light color → print action(“Stop, Go, Wait”).   -->


<!DOCTYPE html>
<html>
<head>
  <title>traffic light</title>
</head>
<body>
  <input type="text" id="light" placeholder="Enter grade" >
  <button onclick="trafficcheck()">Check light</button>

  <h3 id="meaning"></h3>

  <script>
    function trafficcheck() {
        const gradeInput = document.getElementById("light").value;
      let message;


      switch (gradeInput) {

        case 'red':
          message = "stop";
          break;
        case 'green':
           message = "go";   
          break;
        case 'yellow':
          message = "wait";
          break;
      
        default:
          result = "Invalid";
      }

       document.getElementById("meaning").innerText = message;
    }
  </script>
</body>
</html>
