<!DOCTYPE html>
<html lang="en">

<head>
     <jmeta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Simple Calculator</title>
          <style>
               body {
                    font-family: Arial, sans-serif;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    height: 100vh;
                    margin: 0;
                    background-color: #f0f0f0;
               }

               .calculator {
                    background-color: #fff;
                    border-radius: 8px;
                    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
                    padding: 20px;
                    text-align: center;
               }

               input[type="number"] {
                    width: 100px;
                    padding: 10px;
                    margin: 5px;
                    border: 1px solid #ddd;
                    border-radius: 4px;
                    font-size: 16px;
               }

               button {
                    background-color: #4CAF50;
                    border: none;
                    color: white;
                    padding: 10px 20px;
                    text-align: center;
                    text-decoration: none;
                    display: inline-block;
                    font-size: 16px;
                    margin: 5px;
                    cursor: pointer;
                    border-radius: 4px;
               }

               #result {
                    font-size: 24px;
                    margin-top: 10px;
                    font-weight: bold;
               }
          </style>
</head>

<body>
     <div class="calculator">
          <input type="number" id="num1" placeholder="Enter number">
          <input type="number" id="num2" placeholder="Enter number">
          <br>
          <button onclick="calculate()">=</button>
          <div id="result"></div>
     </div>

     <script>
          function calculate() {
               const num1 = parseFloat(document.getElementById('num1').value);
               const num2 = parseFloat(document.getElementById('num2').value);
               const result = num1 + num2;
               document.getElementById('result').innerText = `Result: ${result}`;
          }
     </script>
</body>

</html>
