<!-- 9.  Animate width of a <div> from 100px to 300px.   -->


<!DOCTYPE html>
<html>
<head>
  <title>Animate width</title>
</head>
<body>
    <style>

#myText{
    width = 100px;
    height = 100px;
     background-color: lightblue;
      transition: width 0.5s ease; 

}


</style>
 <div id="myText"></div>
  <button onclick="btnch()">
Animate Width
  </button>
  <script>
    function btnch() {
    element = document.getElementById("myText").style.width = "300px";
    }
  </script>

</body>
</html>