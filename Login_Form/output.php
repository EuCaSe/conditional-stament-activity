<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Result</title>
</head>
<body>
    <h2>Login Result</h2>
    <?php
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Check if the username and password match
        if ($username === 'admin' && $password === 'password123') {
            echo "Login successful.";
        } else {
            echo "Invalid username or password.";
        }
    } else {
        echo "Username or password is not provided.";
    }
    ?>
</body>
</html>
