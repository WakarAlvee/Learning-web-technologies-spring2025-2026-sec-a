<?php
// logout.php
session_start();

// 1. Unset all session variables
session_unset();

// 2. Destroy the session
session_destroy();

// 3. Optional: Clear the 'remember me' cookie if it exists
if (isset($_COOKIE['remember_me'])) {
    setcookie('remember_me', '', time() - 3600, "/");
}

// 4. Redirect the user back to the login page or public home
header("Location: login.php");
exit();
?>