<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $servername = "localhost:3307";
        $username = "root";
        $password = "";
        $database = "studentdb";
        $conn = new mysqli($servername, $username, $password, $database);

        //$conn = new mysqli("localhost","root","","studentdb");

        /*if ($conn){
            echo "Database Connected Successfully.";
        }
        else{
            die("Connection Failed" . $conn->connect_error());
        } */

        if (!$conn){
            die("Connection Failed" . mysqli_connect_error());
        }
        else{
            echo "Database Connected Successfully.";
        } 
        $conn->close();
    ?>
</body>
</html>