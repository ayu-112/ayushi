<!-- 7. Choose language code(en, hi, gu) → show greeting.   -->




<!DOCTYPE html>
<html>
<head>
  <title>language</title>
</head>
<body>
  <input type="text" id="fruit" placeholder="Enter grade" >
  <button onclick="language()">language name</button>

  <h3 id="meaning"></h3>

  <script>
    function language(){
        const gradeInput = document.getElementById("fruit").value;
      let message;


      switch (gradeInput) {

        case 'english':
          message = "hello..!";
          break;
        case 'gujarati':
           message = "namste..!";   
          break;
        case 'hindi':
          message = "kese ho?";
          break;
         
      
        default:
          result = "Invalid";
      }

       document.getElementById("meaning").innerText = message;
    }
  </script>
</body>
</html>

