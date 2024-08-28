<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic calculator</title>
</head>

<body>
    <form method="post" action="" >
        <label for="number1">Write number</label><br>
        <input type="number" id="num1" name="num1" placeholder="write first number" required>
        <input type="number" id="num2" name="num2" placeholder="write second number" required>

        
            <button type="submit" name="operation" value="add">+</button>
            <button type="submit" name="operation" value="sub">-</button>
            <button type="submit" name="operation" value="mul">x</button>
            <button type="submit" name="operation" value="div">/</button>
       
        <br><br>


    </form>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];
    $result = 0;
  



if($operation == 'add'){
    $result= $num1 + $num2;
}else if ($operation == 'sub') {
    $result= $num1 - $num2;
}else if ($operation == 'mul') {
    $result= $num1 * $num2;
}else if ($operation == 'div') {
    $result= $num1 / $num2;
}
echo "<h2>Result: $result</h2>";
}

?>
</body>

</html>


