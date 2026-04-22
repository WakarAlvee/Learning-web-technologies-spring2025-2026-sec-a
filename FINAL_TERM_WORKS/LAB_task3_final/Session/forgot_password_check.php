<?php
// forgot_password_check.php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    // Check if the user is registered and the email matches
    if (isset($_SESSION['registered_user']) && $email == $_SESSION['registered_user']['email']) {
        echo "Password recovery email has been sent to your registered address.";
        echo "<br><a href='login.php'>Back to Login</a>";
    } else {
        echo "Email not found. Please register or check your email address.";
        echo "<br><a href='forgot_password.php'>Try again</a>";
    }
} else {
    header("Location: forgot_password.php");
    exit();
}
?>