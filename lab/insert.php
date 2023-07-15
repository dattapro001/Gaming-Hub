<?php

include 'config.php';
$name = $_POST['name'];
$price = $_POST['price'];
$image = $_FILES['image'];

// print_r($image);

$imageLocation = $_FILES['image']['tmp_name'];//user ar temporary location
$imageName = $_FILES['image']['name'];


$image_des = "image/".$imageName;//user ar parmanent location jekane ami image rakbo

move_uploaded_file($imageLocation,$image_des);

$product_insertQuery = "INSERT INTO `product`(`name`, `price`, `image`) VALUES ('$name','$price','$image_des')";

if(mysqli_query($conn,$product_insertQuery)){
    echo "<script> alert('Product Inserted') </script>";
    echo "<script> location.href = 'product.php' </script>";
}