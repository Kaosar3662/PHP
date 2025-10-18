<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Calculator using PHP</title>
</head>

<body>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <input type="number" name="num01" placeholder="number one">
    <select name="operator">
      <option value="add">+</option>
      <option value="subtract">-</option>
      <option value="multiply">*</option>
      <option value="divide">/</option>
    </select>
    <input type="number" name="num02" placeholder="number two">
    <button>Calculate</button>
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = htmlspecialchars($_POST["num01"]);
    $num2 = htmlspecialchars($_POST["num02"]);
    $sign = htmlspecialchars($_POST["operator"]);

    $err = false;
    if (empty($num1) || empty($num2)) {
      echo "<p class='calc-error'>Fill in all fields!</p>";
      $err = true;
    }
    if (!is_numeric($num1) || !is_numeric($num2)) {
      echo "<p class='calc-error'>You are allowed to type numbers only!</p>";
      $err = true;
    }

    if ($err == false) {
      $value = 0;
      if ($sign == "add") {
        $value = $num1 + $num2;
      } elseif ($sign == "subtract") {
        $value = $num1 - $num2;
      } elseif ($sign == "multiply") {
        $value = $num1 * $num2;
      } elseif ($sign == "divide") {
        $value = $num1 / $num2;
      } else {
        echo "Something is wrong here";
      }
      echo "<h1>Result is $value</h1>";
    }
  }
  ?>

</body>

</html>