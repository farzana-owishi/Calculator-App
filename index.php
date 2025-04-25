<!DOCTYPE html>
<html>
<head>
    <title>PHP Calculator</title>
</head>
<body>
    <h1>Simple Calculator</h1>
    <form method="POST">
        <input type="number" name="num1" placeholder="Number 1" required>
        <select name="operator">
            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
        </select>
        <input type="number" name="num2" placeholder="Number 2" required>
        <button type="submit">Calculate</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operator = $_POST['operator'];
        $result = 0;

        switch ($operator) {
            case 'add': $result = $num1 + $num2; break;
            case 'subtract': $result = $num1 - $num2; break;
            case 'multiply': $result = $num1 * $num2; break;
            case 'divide': $result = ($num2 != 0) ? $num1 / $num2 : "∞ (Can't divide by zero)";
        }

        echo "<h2>Result: $result</h2>";
    }
    ?>
</body>
</html>