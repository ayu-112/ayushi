<!-- Input grade "A, B, C, D" → print meaning(“Excellent, Good…”).  -->


<!DOCTYPE html>
<html>
<head>
  <title>Simple Calculator</title>
</head>
<body>
  <input type="text" id="grade" placeholder="Enter grade" maxlength="1">
  <button onclick="showMeaning()">Check Meaning</button>

  <h3 id="meaning"></h3>

  <script>
    function showMeaning() {
        const gradeInput = document.getElementById("grade").value.toUpperCase();
      let message;


      switch (gradeInput) {

        case 'A':
          message = "Excellent";
          break;
        case 'B':
           message = "good";   
          break;
        case 'C':
          message = "avarage";
          break;
        case 'D':
        message = "poor";
          break;
        default:
          result = "Invalid operator";
      }

       document.getElementById("meaning").innerText = message;
    }
  </script>
</body>
</html>
