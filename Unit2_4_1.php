<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

       $str= "Welcome to PHP";

       /* 1 - strlen() */
       echo "<h3>1. strlen()</h3>";
       echo "String: $str <br>";
       echo "Length=".strlen($str);

       echo "<hr>";

       /* 2 - strpos() */
       echo "<h3>2. strpos()</h3>";
       echo "Position of 'PHP'=" . strpos($str,'PHP');

       echo "<hr>";

       /* 3 - str_word_count() */
       echo "<h3>3. str_word_count()</h3>";
       echo "String: $str <br>";
       echo "Length=" . strlen($str);

       echo "<hr>";

       /* 4 - strrev() */
       echo "<h3>4. strrev()</h3>";
       echo "Reverse String=" . strrev($str);

       echo "<hr>";

       /* 5 - str_replace() */
       echo "<h3>5. str_replace()</h3>";
       echo str_replace("PHP","Java",$str);
 
       echo "<hr>";


       /* 6 - strtolower() */
       echo "<h3>6. strtolower()</h3>";
       echo strtolower($str);

       echo "<hr>";

       /* 7 - strtoupper() */
       echo "<h3>7. strtoupper()</h3>";
       echo strtoupper($str);

       echo "<hr>";

    ?>
</body>
</html>