<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      $conn = new mysqli("localhost:3307","root","","studentdb");
      if($conn->connect_error)
      {
        die("connection failed");
      }

      $stmt = $conn->prepare("INSERT INTO students2(name,email,city) VALUES
      (?,?,?)");

      $name = "rajvi";
      $email = "xyz@gmail.com";
      $city = "rajkot";

      $stmt->bind_param("sss",$name,$email,$city);

      if($stmt->execute())
      {
            echo"Record Inserted Successfully.";

      }
    else
    {
        echo"Error";
    }
    $stmt->close();
    $conn->close();

        ?>
</body>
</html>