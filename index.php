<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="functions.php" method="get">
        <input type="text" name="num01" placeholder="Number 1">
        <input type="text" name="num02" placeholder="Number 2">
        <select name="operator">
            <option>None</option>
            <option>Subtract</option>
            <option>Multiply</option>
            <option>Divide</option>
        </select>
        <br/>
        <button name="submit" value="submit" type="submit">Calculate</button>
    </form>
<p>The answer is: </p>
    <?php
        if(isset($_GET['submit'])) {
            $result1 = $_GET['num01'];
            $result2 = $_GET['num02'];
            $oper = $_GET['oper'];
            switch ($oper) {
                case "add":
                    $sum = $result1 + $result2;
                    break;
                case "sub":
                    $sum = $result1 - $result2;
                    break;
                case "multiply":
                    $sum = $result1 * $result2;
                    break;
                case "divide":
                    $sum = $result1 / $result2;
                    break;
                default:
                    $sum = "There was an error";
                    break;
        }
            }
        
    ?>
</body>
</html>