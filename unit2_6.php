<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
       <h2>Calculator</h2>
    <form method="post">
        Number 1: <input type="number" name="num1" required><br><br>
        Number 2: <input type="number" name="num2" required><br><br>
        Operation:
        <select name="operation" required>
            <option value="+">Add(+)</option>
            <option value="-">Subtract(-)</option>
            <option value="*">Multiply(*)</option>
            <option value="/">Divide(/)</option>
        </select><br><br>
        <input type="submit" name="submit" value="Calculate">
    </form>
    <?php
       function calculate($num1,$num2,$op){
        switch($op){
            case '+':
                return $num1 + $num2;
            case '-':
                return $num1 - $num2;
            case '*':
                return $num1 * $num2;        
            case '/':
                return $num2 !=0? $num1/$num2:"cannot divide by zero";
            default:
                return"Invalid operation";
        }
       }
       if (isset($_POST['submit'])){
        $n1=$_POST['num1'];
        $n2=$_POST['num2'];
        $op=$_POST['operation'];

        $result=calculate($n1,$n2,$op);
        echo"<h3>Result:$result</h3>";
       }
    ?>
</body>
</html>