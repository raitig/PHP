write a program for mathematical calculator.//
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Mathametical Calculator</title>
</head>
<body>
    <form action="calculate.php" method=post>
        <label> Enter the first number </label>&nbsp;&nbsp;
        <input type="number" name="num1" required><br><br>
        <label> Enter the second number</label>&nbsp;&nbsp;
        <input type ="numnber" name="num2" required><br><br>
        <label> Enter your choice </label>
        <select name="choice">
            <option value ="add">Addition </option>
            <option value ="sub">Subtraction </option>
            <option value ="mul">Multiplication </option>
            <option value ="div">Division </option>
</select>
<br><br>
<input type = "reset">

<input type =submit value ="submit">
</form>
</body>
</html>