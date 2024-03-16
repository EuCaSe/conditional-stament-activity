<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Calculator</title>
</head>
<body>
    <h2>Grade Calculator</h2>
    <form action="output.php" method="post">
        Enter your score (out of 100): <input type="number" name="score" min="0" max="100" required>
        <input type="submit" value="Calculate Grade">
    </form>
</body>
</html>
