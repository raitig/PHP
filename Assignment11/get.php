<!-- Write a php program to upload a file and get information about the upload -->
<DOCTYPE html>

    <head>
        <title> File upload </title>
    </head>

    <body>
        <h2> Upload file to get information </h2>
        <form action="getcheck.php" method="post" enctype="multipart/form-data">
            <label> Choose a file :</label>&nbsp;&nbsp;
            <input type="file" name="file" required><br><br>
            <input type="reset" value="Reset">
            <input type="submit" value="Submit">
        </form>
    </body>

    </html>