<!-- 7. Store a product name and price, display “Product: Laptop, Price: 50000”. -->




<!DOCTYPE html>
<html>
<head>
   
</head>
<body>

    <h2>Enter product</h2>
    

    <p id="products"></p>

    <script>
  var productname = "laptop";
     var price = 50000;   
        
          var productdetail = "product:" + productname + "price:" + price;

           
 
            document.getElementById("products").innerText = productdetail;

    </script>

</body>
</html>
