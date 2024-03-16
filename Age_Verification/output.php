<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Age Verification Result</title>
</head>
<body>
    <h2>Age Verification Result</h2>
    <?php
    // Check if age is set and not empty
    if (isset($_POST['age']) && !empty($_POST['age'])) {
        // Get the entered age
        $age = $_POST['age'];
        
        // Check if the age is above 18
        if ($age >= 18) {
            echo "You are old enough to enter.";
        } else {
            echo "You are too young to enter.";
        }
    } else {
        echo "Age is not provided.";
    }
    ?>
</body>
</html>
