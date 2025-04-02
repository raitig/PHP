<!-- Write a PHP program to upload an inage file in the uploads and display the image alog with other information about the file -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image uploader</title>
</head>

<body>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <label> Choose an image file </label>&nbsp;&nbsp;
        <input type="file" name="photo" accept=".png,.jpg,.jpeg">
        <br><br>
        <input type="reset">&nbsp;&nbsp;
        <input type="submit" value="Submit">
    </form>
</body>

</html>