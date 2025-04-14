<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> File opexations </title>
</head>
<body>
    <h3> File operations :</h3>
    <form action="ass1.php" method="post">
        <label> Enter the name : </label>&nbsp;&nbsp;
        <input type="text" name="filename" required>
        <br><br>
        <label> Enter message : </label>&nbsp;&nbsp;
        <textarea name="message" result="10" cols="50"></textarea>
        <br><br>
        <label> Choose an operator : </label>
        <select name="task">
            <option value="Create"> Create file </option>
            <option value="Read"> Read file </option>
            <option value="Append">Append context </option>
        </select>
        <br><br>
        <input type="reset">&nbsp;&nbsp;
        <input type="Submit" value="Submit">
    </form>
</body>
</html>