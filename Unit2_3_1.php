<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //1-array_change_key_case()
        echo"<h3>1-array_change_key_case()</h3>";
        $arr=array("MArIya"=>"Name","RaJkoT"=>"City");
        echo"<br><b><Lower Case Keys:</b><br>";
        print_r(array_change_key_case($arr,CASE_LOWER));
        echo"<br><b><Upper Case Keys:</b><br>";
        print_r(array_change_key_case($arr,CASE_UPPER));

        //2-array_chunk()
        echo"<hr><h3>2-array_chunk()</h3>";
        $months=array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
        print_r(array_chunk($months,3,"<br>"));

        //3-array_count_values()
        echo"<hr><h3>3-array_count_values()</h3>";
        $colors=array("Red","Blue","Red","Green","Blue","Red");
        print_r(array_count_values($colors));

        //4-array_combine()
        echo "<hr><h3>4-array_combine()</h3>";
        $keys=array("Name","City","Age");
        $values=array("Mariya","Rajkot",19);
        print_r(array_combine($keys,$values));

        //5-array_pop()
        echo "<hr><h3>5-array_pop()</h3>";
        $num=array(10,20,30,40);
        array_pop($num);
        print_r($num);

        //6-array_push()
        echo "<hr><h3>6-array_push()</h3>";
        $num=array(10,20,30);
        array_push($num,40,50);
        print_r($num);

        //7-array_unshift()
        echo "<hr><h3>7-array_unshift()</h3>";
        $num=array(20,30,40);
        array_unshift($num,10);
        print_r($num);

        //8-array_shift()
        echo "<hr><h3>8-array_shift()</h3>";
        $num=array(10,20,30,40);
        array_shift($num);
        print_r($num);
    ?>
</body>
</html>