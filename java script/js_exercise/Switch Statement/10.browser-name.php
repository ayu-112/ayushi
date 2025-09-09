<!-- 10. Choose browser name(chrome, firefox) → print “Supported / Not supported”.   -->


<!DOCTYPE html>
<html>
<head>
  <title>crome</title>
</head>
<body>
  <input type="text" id="weathername" placeholder="Enter grade" >
  <button onclick="season()">crome</button>

  <h3 id="meaning"></h3>

  <script>
    function season(){
        const gradeInput = document.getElementById("weathername").value;
      let message;


      switch (gradeInput) {

        case 'crome':
          message = "Supported..!";
          break;
        case 'firefox':
           message = "not Supported..!";   
          break;
    
         
        default:
          result = "Invalid";
      }

       document.getElementById("meaning").innerText = message;
    }
  </script>
</body>
</html>

