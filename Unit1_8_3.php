<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        error_reporting(0);
    ?>

     


<form method="get">
        <input type="text" name="uname1">
        <input type="text" name="uname2">
        <input type="text" name="uname3">
        <input type="text" name="uname4">
        <input type="text" name="uname5">
        <input type="Submit" name="Submit" value="Submit">
</form>
<br>
<?php
    echo"<h2>hello";
        $nm=array();
        $nm[0] = $_GET['uname1'];
        $nm[1]= $_GET['uname2'];
        $nm[2] = $_GET['uname3'];
        $nm[3]= $_GET['uname4'];
        $nm[4]= $_GET['uname5'];

     foreach($nm as $n)
     {
        echo"$n <br>";
    
     }
        
?>
</body>
</html>