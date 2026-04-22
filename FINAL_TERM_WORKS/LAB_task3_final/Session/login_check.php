<?php
// login_check.php
session_start();

// For this lab, assume these are the hardcoded credentials
$stored_username = "hello";
$stored_password = "bye";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Basic Validation
    if ($username == $stored_username && $password == $stored_password) {
        // Store user in session to track the logged-in state 
        $_SESSION['user'] = $username;
        $_SESSION['is_logged_in'] = true;

        // Handle 'Remember Me' with a cookie 
        if (isset($_POST['remember'])) {
            setcookie('remember_me', $username, time() + (100), "/"); // 100 seconds for testing
        }

        header("Location: dashboard.php");
        exit();
    } else {
        echo "Invalid username or password. <a href='login.php'>Try again</a>";
    }
} else {
    header("Location: login.php");
    exit();
}
?>