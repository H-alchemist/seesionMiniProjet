<?php

 session_start();
 if( $_SESSION['status'] == "success"){
    //
 }else{
    header("Location: index.php"); 
    exit();
          
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<header>
    <!-- Logo -->
    <a href="../index.php">workShop</a>
    <div class="login-button">
        <a href="destroy.php">Log in</a>
    </div>
</header>
    <h1> <strong>
        
    data

</strong> </h1>
</body>
</html>