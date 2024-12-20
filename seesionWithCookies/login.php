<?php
session_start();

$name = "user";
$Conpassword = "password";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $_POST['user'];
    $password = $_POST['password'];
    $remember = isset($_POST['remember']);

   
    if ($user === $name && $password === $Conpassword) {
        
        $_SESSION['user'] = $user;


        if ($remember) {
            setcookie('user', $name, time() + 4409 ,"/"); 
        }

        header('Location: welcome.php');
        exit();
    } else {
        echo "Invalid inputs";
    }
}
?>
