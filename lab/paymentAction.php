<?php
  include 'config.php';
  $p_name = $_REQUEST['p_name'];
  $p_type = $_REQUEST['p_type'];
  $p_card = $_REQUEST['p_card'];
  $p_amount = $_REQUEST['p_amount'];

  $insertQuery = "INSERT INTO `payment`(`p_name`, `delivery_type`, `card_number`, `amount`) VALUES ('[$p_name]','[$p_type]','[$p_card]','[$p_amount]')"; 

  if(!mysqli_query($conn,$insertQuery)){

    echo "<script> alert('DB Doesn't Connected. payment Again!!') </script>";
    echo "<script> location.href = 'payment.php' </script>";
 }

 else{
    echo "<script> alert('Payment Successfully.Login Now!!') </script>";
    echo "<script> location.href = 'manu.php' </script>";
 }



?>