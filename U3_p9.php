<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
        <h2> User Checking </h2>
        <form method="post">
            Enter Your Name:
            <input type="text" name="name"><br><br>
            <input type="submit" name="submit" value="Submit">
        </form>
    
    <?php

    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        if($_COOKIE['username'] == $name)
        {
            echo "<h3>Welcome, " . $name . "!</h3>";
            echo "<h3> You are a Repeated User. </h3>";
         }
         else
         {
            setcookie("username",$name,time() + (30*24*60*60),"/");
            echo "<h3>Welcome, " . $name . "!</h3>";
            echo "<h3> You are a New User. </h3>";
        }
    }

    ?>
    </center>
</body>
</html> 