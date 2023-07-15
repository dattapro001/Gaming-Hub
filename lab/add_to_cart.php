<?php
session_start();

if (!isset($_SESSION['list'])) {
    $_SESSION['list'] = [];
}

$gameId = $_GET['id'];
array_push($_SESSION['list'], $gameId);

include 'manu.php';
exit;
?>