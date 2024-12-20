<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $language = $_POST['language']; 
    setcookie("language", $language, time() + (3600));
    header("Location: indexCookies.php"); 
    exit();
}

$language = isset($_COOKIE['language']) ? $_COOKIE['language'] : null;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h1>
        <?php
        if ($language) {
            echo "Your preferred language is " . $language . ".";
        } else {
            echo "Please select your preferred language.";
        }
        ?>
    </h1>
    <form method="POST" action="">
        <select name="language" id="language" required>
            <option value="" disabled selected>Select...</option>
            <option value="English" <?php echo $language === "English" ? "selected" : ""; ?>>English</option>
            <option value="French" <?php echo $language === "French" ? "selected" : ""; ?>>French</option>
            <option value="Spanish" <?php echo $language === "Spanish" ? "selected" : ""; ?>>Spanish</option>
        </select>
        <button type="submit">choose</button>
    </form>
</body>
</html>
