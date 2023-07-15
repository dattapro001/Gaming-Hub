<?php
session_start();
if(isset($_SESSION['l_username'])){
  echo "<script> alert('welcome to home page')</script>"; 
  include 'manu.php';
}

else{
    echo "<script> alert('Login First') </script>";
    echo "<script> location.href = 'index.php' </script>";
}
?>



