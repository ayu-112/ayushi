 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dynamic Price Calculator</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      padding: 20px;
    }
    input, select {
      margin: 10px 0;
      padding: 5px;
      font-size: 16px;
    }
  </style>
</head>
<body>

  <h2>Dynamic Price Calculator</h2>

  <!-- Displaying the fixed unit price -->
  <!-- <p>Unit Price: ₹<strong id="unitPrice">200</strong></p> -->

  <!-- Quantity selector -->
  <label for="qty">Select Quantity:</label>
  <select id="qty" onchange="getprice()">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
     <option value="4">4</option>
    <option value="5">5</option>
  </select>

  <!-- Input box to show total price -->
  <p>Total Price: ₹<input type="text" id="price" readonly></p>


  <script>
    const basePrice = 200; // Fixed price per unit
    const priceInput = document.getElementById('price');// get id price
    const qtySelect = document.getElementById('qty'); // get id qty

    function getprice() {
      const quantity = Number(qtySelect.value);
      const total = basePrice * quantity;
      priceInput.value = total;
    }

    // Set initial value on page load
    getprice();
  </script>

</body>
</html>