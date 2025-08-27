<!-- 9. Choose shape(circle, square) → show area formula.   -->

<!DOCTYPE html>
<html>
<head>
  <title>Shape Area Formula</title>
</head>
<body>
  <h2>Select a Shape</h2>

  <select id="shape">
    <option value="circle">Circle</option>
    <option value="square">Square</option>
  </select>

  <button onclick="showFormula()">Show Formula</button>

  <h3 id="formula"></h3>

  <script>
    function showFormula() {
      const shape = document.getElementById("shape").value;
      let formula;

      switch (shape) {
        case 'circle':
          formula = "Area of Circle = π × r²";
          break;
        case 'square':
          formula = "Area of Square = side × side";
          break;
        default:
          formula = "Unknown shape";
      }

      document.getElementById("formula").innerText = formula;
    }
  </script>
</body>
</html>
