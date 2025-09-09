 <!-- 6.  Change button background on hover using JS.   -->

       <!DOCTYPE html>
<html>
<head>
  <title>button background</title>
</head>
<body>

  <button 
    id="myButton" 
    onmouseover="hoverOn()" 
    onmouseout="hoverOff()"
  >
    Hover Over Me
  </button>
  <script>


    function hoverOn() {
    document.getElementById("myButton").style.backgroundColor = "orange";
    }
function hoverOff() {
    document.getElementById("myButton").style.backgroundColor = " ";
    }

   
  </script>

</body>
</html>