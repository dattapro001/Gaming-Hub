<?php
session_start();


if(isset($_SESSION['l_username'])){
  session_start();
  session_destroy();
  echo "<script> location.href = 'login.php' </script>";
}

else{
    echo "<script> alert('Login Out') </script>";
    echo "<script> location.href = 'index.php' </script>";
}
 session_start();
 session_destroy();

 echo "<script> location.href = 'index.php' </script>"
?>