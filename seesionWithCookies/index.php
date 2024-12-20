<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<header>
    <!-- Logo -->
    <a href="../index.php">workShop</a>
   
</header>

<!-- <form id="login-form" action="login.php" method="POST">
    <h2>Login</h2>
    <div>
        <label for="email">Email</label>
        <input type="text" id="text" name="user" placeholder="Enter your email" required>
    </div>
    <div>
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Enter your password" required>
    </div>
    <button type="submit">Se souvenir de moi</button>
</form> -->
<form method="POST" action="login.php">
<div>
        <label for="email">Email</label>
        <input type="text" id="text" name="user" placeholder="Enter your email" required>
    </div>
    <div>
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Enter your password" required>
    </div>
    <label>
        <input type="checkbox" name="remember"> Remember me
    </label>
    <button type="submit">Login</button>
</form>

</body>
</html>
