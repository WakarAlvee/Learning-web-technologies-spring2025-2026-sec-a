<?php
// change_password.php
session_start();

// Ensure the user is logged in
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>xCompany - Change Password</title>
</head>
<body>

    <table width="100%">
        <tr>
            <td><h1>XCompany</h1></td>
            <td align="right">
                Logged in as Bob | <a href="logout.php">Logout</a> [cite: 147]
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
                <fieldset>
                    <legend>CHANGE PASSWORD</legend> [cite: 142]
                    <form method="post" action="update_password.php">
                        Current Password: <input type="password" name="current_password"><br>
                        <br>
                        New Password: <input type="password" name="new_password"><br>
                        <br>
                        Retype New Password: <input type="password" name="retype_password"><br>
                        <hr>
                        <input type="submit" value="Submit"> [cite: 145]
                    </form>
                </fieldset>
            </td>
        </tr>
    </table>

    <hr>

    <center>
        <p>Copyright &copy; 2017</p> [cite: 146]
    </center>

</body>
</html>