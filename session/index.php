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
    <div class="login-button">
        <a href="destroy.php">Log in</a>
    </div>
</header>

<form id="login-form" action="login.php" method="POST">
    <h2>Login</h2>
    <div>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Enter your email" required>
    </div>
    <div>
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Enter your password" required>
    </div>
    <button type="submit">Log In</button>
</form>
</body>
</html>
