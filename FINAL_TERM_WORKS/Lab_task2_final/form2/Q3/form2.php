<?php
    $email = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST["email"];
    }
?>

<html></html>
    <head> 
        <title>Email Form</title>

    </head>

    <body> 
        <fieldset style="width: 150px;  border: 2px solid black; padding: 10px;">
             <legend >Email</legend>
        <form action="form2.php" method="post">
            
             <input type="email" name="email" value ="<?php echo $email; ?>"> //retains previous input
             <span title="sample@example.com">[i]</span>
             <hr width="250px" align="left"> 
             <input type="submit" value="Submit">

           
        </form>

        </fieldset>

    <?php
if ($email != "") {
    echo "<h3>Your Email: " . $email . "</h3>";
}
?>


    </body>

</html>