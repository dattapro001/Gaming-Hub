<?php
    include 'config.php';
    $l_username = $_POST['l_username'];
    $l_pass = $_POST['l_pass'];

    $_result = mysqli_query($conn,"SELECT * FROM `register` WHERE db_username='$l_username' And db_pass='$l_pass'");

    if(mysqli_num_rows($_result)){
        session_start();
        $_SESSION['username'] = $l_username; //session create
        echo "<script>location.href='manu.php'</script>";
        
    }
    else{
        echo "<script>alert('Invalid username and Password!!')</script>";
        echo "<script>location.href='index.php'</script>";
    }


?>