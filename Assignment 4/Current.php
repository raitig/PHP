<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="1">
    <title>Current digital time </title>
</head>
<body>
    <h2> current Time :</h2>
    <?php
    $curr=date('h-i-s');
    echo "<h3>".$curr."</h3>";
    ?>
</body>
</html>