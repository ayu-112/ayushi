<!DOCTYPE html>
<html>
<head>
  <title>Simple Calculator</title>
</head>
<body>
  <h2>Calculator</h2>

  <input type="number" id="num1" placeholder="First number">
  <select id="operator">
    <option value="+">+</option>
    <option value="-">-</option>
    <option value="*">*</option>
    <option value="/">/</option>
  </select>
  <input type="number" id="num2" placeholder="Second number">
  <button onclick="calculate()">Calculate</button>

  <h3 id="result"></h3>

  <script>
    function calculate() {
      const a = (document.getElementById("num1").value);
      const b = (document.getElementById("num2").value);
      const operator = document.getElementById("operator").value;
      let result;

      switch (operator) {
        case '+':
          result = a + b;
          break;
        case '-':
          result = a - b;
          break;
        case '*':
          result = a * b;
          break;
        case '/':
          if (b === 0) {
            result = "Error: Division by zero";
          } else {
            result = a / b;
          }
          break;
        default:
          result = "Invalid operator";
      }

      document.getElementById("result").innerText = "Result: " + result;
    }
  </script>
</body>
</html>
