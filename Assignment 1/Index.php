// 1.Create a php webpage and print your name:
// 2.To write a program gets the name of the user form and show greeting text :
// 3.To write a program gets the name and phone number of the user form and show greeting text :
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My first web page</title>
</head>
<body>
    <form action="welcome.php"name="my form" method="post">
        <label> Enter your name </label>
        <input type ="text" name="Name" place holder ="Enter your name" required>
        <br><br>
        <label> Contact number </label>
        <input type ="text" name="Number" place holder ="Enter your contect number" required>
        <br><br>
        <input type="reset">
        <br><br>
        <input type="Submit" value="Submit">
</form>
</body>
</html>
