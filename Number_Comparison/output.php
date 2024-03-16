<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number Comparison Result</title>
</head>
<body>
    <h2>Number Comparison Result</h2>
    <?php
    if (isset($_POST['num1']) && isset($_POST['num2'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        if ($num1 > $num2) {
            echo "The first number ($num1) is greater than the second number ($num2).";
        } elseif ($num1 < $num2) {
            echo "The second number ($num2) is greater than the first number ($num1).";
        } else {
            echo "Both numbers are equal.";
        }
    } else {
        echo "Please provide both numbers.";
    }
    ?>
</body>
</html>
