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
      $sql = "INSERT INTO students2(name,email,city)
      VALUES('Leon','leon@gmail.com','California')";
      if(mysqli_query($conn,$sql)){
        echo "Record Inserted Successfully.";
      }
      else{
        echo "Error";
      }

        ?>
</body>
</html>