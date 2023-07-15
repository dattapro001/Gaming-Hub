<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cart</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Cart</h1>
        <?php if (!empty($_SESSION['list'])): ?>
            <ul class="list-group">
                <?php foreach ($_SESSION['list'] as $gameId): ?>
                    <li class="list-group-item">Unic-Id: <?php echo $gameId; ?></li>
                <?php endforeach; ?>
            </ul>
            <a href="payment.php" class="btn btn-primary">Proceed to Payment</a>
        <?php else: ?>
            <p>Your cart is empty.</p>
        <?php endif; ?>
    </div>
</body>
</html>