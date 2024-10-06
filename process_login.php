<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TeckTok</title>
</head>
<body>
    <h1>This is TeckTok aka "the TikTok of TECH"</h1>
    <a href="https://panda636.github.io/tek/" target="_blank" rel="noopener noreferrer">Log out</a>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize input data
    $username = htmlspecialchars(trim($_POST['username']));
    $password = htmlspecialchars(trim($_POST['password']));
    $remember = isset($_POST['remember']) ? 'Yes' : 'No';

    // Check if the form fields are not empty
    if (!empty($username) && !empty($password)) {
        // Normally, you'd check these credentials against a database.
        // For now, we just display the data.
        echo "<h2>Login Successful!</h2>";
        echo "Welcome " . $username . "<br>";
    } else {
        // Handle the case where fields are empty
        echo "All fields are required!";
    }
} else {
    // Handle the case where the form is not submitted correctly
    echo "Invalid form submission!";
}
?>