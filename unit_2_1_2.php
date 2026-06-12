<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$monthsAndDays = [
    "Jan" => 31,
    "Feb" => 28, // 29 in a leap year
    "Mar" => 31,
    "Apr" => 30,
    "May" => 31,
    "Jun" => 30,
    "Jul" => 31,
    "Aug" => 31,
    "Sep" => 30,
    "Oct" => 31,
    "Nov" => 30,
    "Dec" => 31
];



echo "\n Associative Array (Months) \n";
print_r($monthsAndDays);


?>
</body>
</html>