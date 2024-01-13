<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>

<body>

    <form action="calculator.php" method="post">
        Number1: <input type="number" name="number1Input">
        <br><br>
        Operation: <input type="text" name="operationInput">
        <br><br>
        Number2: <input type="number" name="number2Input">
        <br><br>
        <input type="submit">
        <hr>
    </form>

    <?php

    $num1 = $_POST['number1Input'];
    $num2 = $_POST['number2Input'];
    $op = $_POST['operationInput'];

    if ($op == '+') {
        echo $num1 + $num2;
    } else if ($op == '-') {
        echo $num1 - $num2;
    } else if ($op == '*') {
        echo $num1 * $num2;
    } else if ($op == '/') {
        echo $num1 / $num2;
    } else {
        echo "Please choose a valid Operator!";
    }

    ?>
</body>
<footer>
    <?php
    include "footer.php";
    saySomething("Thank You (footer.php)");
    ?>
</footer>

</html>