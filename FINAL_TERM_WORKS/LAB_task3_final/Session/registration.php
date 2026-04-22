<?php
// registration.php
?>
<!DOCTYPE html>
<html>
<head>
    <title>xCompany - Registration</title>
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

    <form method="post" action="registration_check.php">
        <fieldset style="width: 400px;">
            <legend>REGISTRATION</legend>
            Name: <input type="text" name="name"><br>
            Email: <input type="text" name="email"><br>
            User Name: <input type="text" name="username"><br>
            Password: <input type="password" name="password"><br>
            Confirm Password: <input type="password" name="confirm_password"><br>
            
            <fieldset>
                <legend>Gender</legend>
                <input type="radio" name="gender" value="male"> Male
                <input type="radio" name="gender" value="female"> Female
                <input type="radio" name="gender" value="other"> Other
            </fieldset>
            
            <fieldset>
                <legend>Date of Birth</legend>
                <input type="text" name="dob" placeholder="dd/mm/yyyy">
            </fieldset>
            
            <hr>
            <input type="submit" value="Submit">
            <input type="reset" value="Reset">
        </fieldset>
    </form>

    <hr>

    <center>
        <p>Copyright &copy; 2017</p>
    </center>

</body>
</html>