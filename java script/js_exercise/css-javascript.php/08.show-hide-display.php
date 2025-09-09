<!-- 8. Show/hide element by changing display property.   -->

    <!DOCTYPE html>
<html>
<head>
  <title>changing display property</title>
</head>
<body>
     
 <p id="myText">This paragraph will be shown or hidden when you click the button.</p>


  <button onclick="btnch()">
check plz
   
  </button>
  <script>


    function btnch() {
    element = document.getElementById("myText");


    if(element.style.disply == "none"){
         element.style.display = "block";
    }else{
        element.style.disply == "none";
    }

    }

  </script>

</body>
</html>