<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Calculator Result</title>
</head>
<body>
    <h2>Grade Calculator Result</h2>
    <?php
    if (isset($_POST['score'])) {
        $score = $_POST['score'];
        $grade = '';

        if ($score >= 90 && $score <= 100) {
            $grade = 'A';
        } elseif ($score >= 80 && $score <= 89) {
            $grade = 'B';
        } elseif ($score >= 70 && $score <= 79) {
            $grade = 'C';
        } elseif ($score >= 60 && $score <= 69) {
            $grade = 'D';
        } else {
            $grade = 'F';
        }

        echo "Your grade is: $grade";
    } else {
        echo "Score is not provided.";
    }
    ?>
</body>
</html>
