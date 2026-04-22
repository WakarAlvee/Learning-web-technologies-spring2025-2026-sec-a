<?php
// dashboard.php
session_start();

// Redirect to login if the session is not set
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>xCompany - Dashboard</title>
</head>
<body>

    <table width="100%">
        <tr>
            <td><h1>XCompany</h1></td>
            <td align="right">
                Logged in as <?php echo $_SESSION['user']; ?> | 
                <a href="logout.php">Logout</a>
            </td>
        </tr>
    </table>

    <hr>

    <table width="100%">
        <tr>
            <td width="20%">
                <h3>Account</h3>
                <ul>
                    <li><a href="dashboard.php">Dashboard</a></li>
                    <li><a href="view_profile.php">View Profile</a></li>
                    <li><a href="edit_profile.php">Edit Profile</a></li>
                    <li><a href="change_picture.php">Change Profile Picture</a></li>
                    <li><a href="change_password.php">Change Password</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </td>
            <td>
                <h2>Welcome <?php echo $_SESSION['user']; ?></h2>
            </td>
        </tr>
    </table>

    <hr>

    <center>
        <p>Copyright &copy; 2017</p>
    </center>

</body>
</html>