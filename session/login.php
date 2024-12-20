<?php

    session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!empty($email) && !empty($password)) {
        if ($email == "me@gmail.com" && $password == "hhhh") {
            $_SESSION['status'] = "success";
            $_SESSION['message'] = "Login successful!";
            header("Location: data.php"); 
    exit();
        } else {
            $_SESSION['status'] = "failed";
            header("Location: index.php"); 
    exit();
          
        }
    } else {
        $_SESSION['stats'] = "Login successful!";
        header("Location: index.php"); 
    exit();
    }
    
}
?>
