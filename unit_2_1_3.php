<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $laptops = [
        "Apple" => [
            [
                "model" => "MacBook Air M3",
                "price" => 70000
            ],
            [
                "model" => "MacBook Pro 16-inch",
                "price" => 150000
            
            ]
        ],
        "Dell" => [
            [
                "model" => "XPS 13",
                "price" => 650000
            ],
            [
                "model" => "Alienware m16",
                "price" => 180000
            ]
        ]
    ];
    
 
    
    echo "\n Multidimensional Array (Laptops) \n";
    print_r($laptops);
    ?>
</body>
</html>