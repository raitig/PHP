<!-- Create a form of four field as name ,address,age,password.input name, address, age and password through form.Then create a file with name and write name, address, age, password in that file .is_file() function check the existence of file in "data" directory-->
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User information storage </title>
 </head>
 <body>
    <h3> Input User Information </h3>
    <form action="information.php" method="post">
        <label> Enter your name : </label>&nbsp;&nbsp;
        <input type="text" name="myname" required>
        <br><br>
        <label> Enter your address :</label>
        <input  type="text" name="address" required>
        <br><br>
        <label> Enter your age :</label>
        <input type="number" name="age" required>
        <br><br>
        <label> Enter your password :</label>
        <input  type="password" name="pass" required>
        <br><br>
        <input type="reset">&nbsp;&nbsp;
        <input type="submit" value="Save Data">
        </form>
 </body>
 </html>