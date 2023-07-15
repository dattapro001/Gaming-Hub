<?php
  include 'config.php';
  $r_username = $_REQUEST['r_username'];
  $r_email = $_REQUEST['r_email'];
  $r_pass = $_REQUEST['r_pass'];


  //regex
  $username_pattern = "/[A-Za-z .]{3,20}/";
  $email_pattern = "/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/";
  $pass_pattern = "/^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%^&-+=()]).{6,20}/";

 $insertQuery = "INSERT INTO `register`( `db_username`, `db_email`, `db_pass`) VALUES ('$r_username','$r_email','$r_pass')"; 
 $duplicateUsernameQuery = "SELECT * FROM `register` WHERE db_username = '$r_username'";
 
 $duplicate_username = mysqli_query($conn,$duplicateUsernameQuery);

 if(mysqli_num_rows($duplicate_username)>0){
    echo "<script> alert('Username Already Taken!!') </script>";
    echo "<script> location.href = 'login.php' </script>";
 }
 else if(!preg_match($username_pattern,$r_username)){
    echo "<script> alert('only character (3-20)!!') </script>";
    echo "<script> location.href = 'login.php' </script>";
 }
 else if(!preg_match($email_pattern,$r_email)){
    echo "<script> alert('Wrong Email!!') </script>";
    echo "<script> location.href = 'login.php' </script>";
 }
//  else if(!preg_match($pass_pattern,$r_pass)){
//     echo "<script> alert('pass and con pass not matching!!') </script>";
//     echo "<script> location.href = 'login.php' </script>";
//  }

 else if(!mysqli_query($conn,$insertQuery)){

    echo "<script> alert('DB Doesn't Connected. Register Again!!') </script>";
    echo "<script> location.href = 'index.php' </script>";
 }

 else{
    echo "<script> alert('Register Successfully.Login Now!!') </script>";
    echo "<script> location.href = 'index.php' </script>";
 }



?>