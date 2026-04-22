<?php
// forgot_password.php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>xCompany - Forgot Password</title>
</head>
<body>

    <table width="100%">
        <tr>
            <td><h1>XCompany</h1></td>
            <td align="right">
                <a href="index.php">Home</a> | 
                <a href="login.php">Login</a> | 
                <a href="registration.php">Registration</a>
            </td>
        </tr>
    </table>

    <hr>

    <form method="post" action="forgot_password_check.php">
        <fieldset style="width: 300px;">
            <legend>FORGOT PASSWORD</legend>
            Enter Email: <input type="text" name="email"><br>
            <hr>
            <input type="submit" value="Submit">
        </fieldset>
    </form>

    <hr>

    <center>
        <p>Copyright &copy; 2017</p>
    </center>

</body>
</html>