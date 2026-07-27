<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      $conn = new PDO("mysql:host=localhost:3307;dbname=studentdb","root","");

      $sql = "INSERT INTO students2(name,email,city)
      VALUES('holt','leonh@gmail.com','California')";

      $conn->exec($sql);
      echo "Record Inserted Successfully!";

        ?>
</body>
</html>