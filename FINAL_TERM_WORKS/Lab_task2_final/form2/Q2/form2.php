<html> 
    <head> 
        <title>Email Form</title>

    </head>

    <body> 
        <fieldset style="width: 150px;  border: 2px solid black; padding: 10px;">
             <legend >Email</legend>
        <form action="form2.php" method="post">
            
             <input type="email" name="email" required>
             <span title="sample@example.com">[i]</span>
             <hr width="250px" align="left"> 
             <input type="submit" value="Submit">

           
        </form>

        </fieldset>

        <?php
    $email = htmlspecialchars($_POST['email']);
    echo "<h2>Your Email: $email</h2>";
?>

    </body>
</html>