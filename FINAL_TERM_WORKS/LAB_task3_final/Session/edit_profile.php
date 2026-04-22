<?php
// edit_profile.php
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
    <title>xCompany - Edit Profile</title>
</head>
<body>

    <table width="100%">
        <tr>
            <td><h1>XCompany</h1></td>
            <td align="right">
                Logged in as Bob | <a href="logout.php">Logout</a> </td>
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
                    <legend>EDIT PROFILE</legend> <form method="post" action="update_profile.php">
                        Name: <input type="text" name="name" value="Bob"><br> Email: <input type="text" name="email" value="bob@aiub.edu"> <br> Gender: 
                        <input type="radio" name="gender" value="male" checked> Male <input type="radio" name="gender" value="female"> Female
                        <input type="radio" name="gender" value="other"> Other<br>
                        
                        Date of Birth: <input type="text" name="dob" value="23/12/1999"><br> <hr>
                        <input type="submit" value="Submit"> </form>
                </fieldset>
            </td>
        </tr>
    </table>

    <hr>

    <center>
        <p>Copyright &copy; 2017</p> </center>

</body>
</html>