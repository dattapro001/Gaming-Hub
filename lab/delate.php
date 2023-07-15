<?php
include 'config.php';

$id = $_GET['id'];
echo $id;

$DeleteQuery="DELETE FROM `product` WHERE id=$id";
mysqli_query($conn,$DeleteQuery);
header("location: product.php");