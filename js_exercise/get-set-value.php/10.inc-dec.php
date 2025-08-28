<!-- 10.  Create a counter (increase/decrease with buttons).   -->




 <!DOCTYPE html>
<html>
<head>
  <title>Replace Heading Text</title>
</head>
<body>

  <h2>Counter: <span id="counter">0</span></h2>
  
  <button onclick="increase()">Increase</button>
  
  <button onclick="decrease()">decrease</button>

  
  
  
  
  
  
  
  <script>
        let count = 0;

        
  function increase(){
   count++;
    abc = document.getElementById("counter").textContent = count;
  }


   function decrease(){
   count--;
    abc = document.getElementById("counter").textContent = count;
  }

  </script>


    
   


</body>
</html>