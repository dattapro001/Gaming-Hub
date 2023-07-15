<?php
session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

$gameId = $_GET['id'];
array_push($_SESSION['cart'], $gameId);

header('Location: cartt.php');
exit;
?>