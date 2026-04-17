<?php
    $name = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST["username"]);
    }
?>


<!DOCTYPE html>
<html>
<head>
    <title>Input Name</title>
    

</head>
<body>




    <h3>Enter Your Name here : </h3>
    <fieldset>
        <legend   >Name </legend>
        <form action=" " method="post">
            <input type="text" name="username" value="<?php echo $name; ?>"> <br> 
            <hr width="150px" align="left">
            <button type="submit">Submit</button></form> 
            
        </form> 
    </fieldset>

    <?php
    $name = $_POST['username'];
    echo "<h3> Input Name: $name</h3>";
     ?>



</body>


</html>






