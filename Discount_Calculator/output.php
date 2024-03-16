<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discount Calculator Result</title>
</head>
<body>
    <h2>Discount Calculator Result</h2>
    <?php
    if (isset($_POST['total_amount'])) {
        $total_amount = $_POST['total_amount'];
        $discounted_amount = 0;

        if ($total_amount > 1000) {
            $discounted_amount = $total_amount * 0.9; // 10% discount
        } elseif ($total_amount >= 500 && $total_amount <= 1000) {
            $discounted_amount = $total_amount * 0.95; // 5% discount
        } else {
            $discounted_amount = $total_amount; // No discount
        }

        echo "Total amount after discount: $discounted_amount";
    } else {
        echo "Total amount is not provided.";
    }
    ?>
</body>
</html>
