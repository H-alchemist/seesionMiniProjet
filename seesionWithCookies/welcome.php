<?php
session_start();

if (isset($_SESSION['user'])) {
    echo "Welcome, " . $_SESSION['user'];
} 

elseif (isset($_COOKIE['user'])) {
    $_SESSION['user'] = $_COOKIE['user']; 
    echo "Welcome back, " . $_SESSION['user'];
} else {
    echo "Please log in!";
}
?>
