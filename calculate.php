<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculator</title>
</head>
<body>
    <form action="calculate.php" method="post">
        <input type="number" name="number1" required placeholder="Enter your first value"><br>
        <input type="number" name="number2" required placeholder="Enter your second value"><br>
        <select name="operation">
            <option value="add"> Add</option>
            <option value="subract">Subtract</option>
            <option value="multiply">Multiply</option>
            <option value="divide">Divide</option>
        </select><br>
        <input type="submit" value="Calculate"> 
    </form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number1 = $_POST ["number1"];
    $number2 = $_POST["number2"];
    $operation = $_POST["operation"];
    $result = 0;
switch ($operation) {
    case "add":
        $result = $number1 + $number2;
        echo "<p>{$number1} + {$number2} = $result</p>";
        break;
        case "subract":
            $result = $number1 - $number2;
            echo "<p>{$number1} - {$number2} = $result</p>";
            break;
            case "multiply":
                $result = $number1 * $number2;
                echo "<p>{$number1} * {$number2} = $result</p>";
                break;
                case "divide":
                    if ("$number2 != 0") {
                    $result = $number1 / $number2;
                    echo "<p>{$number1} / {$number2} = $result</p>";
                    } else {
                        echo "<p>Error: Cannot divide by zero!!!!!</p>";
                    }
                    break;
                } 
            }
?>