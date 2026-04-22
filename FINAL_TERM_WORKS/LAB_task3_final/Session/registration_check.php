<?php
// registration_check.php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];
    $gender = isset($_POST['gender']) ? $_POST['gender'] : "";
    $dob = $_POST['dob'];

    // Simple validation
    if (empty($name) || empty($email) || empty($username) || empty($password) || empty($confirmPassword)) {
        echo "All fields are required. <a href='registration.php'>Try again</a>";
    } elseif ($password !== $confirmPassword) {
        echo "Passwords do not match. <a href='registration.php'>Try again</a>";
    } else {
        // Store user data in session as a form of "data storage" 
        // per the lab requirements instead of a database 
        $_SESSION['registered_user'] = [
            'username' => $username,
            'password' => $password, // In a real app, always use password_hash()
            'name' => $name,
            'email' => $email,
            'gender' => $gender,
            'dob' => $dob
        ];

        echo "Registration successful! You can now <a href='login.php'>Login</a>";
    }
} else {
    header("Location: registration.php");
    exit();
}
?>