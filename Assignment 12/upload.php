<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $filename = $_FILES["photo"]["name"];
    $filetype = $_FILES['photo']['type'];
    $filesize = $_FILES['photo']['size'];
    $temp_name = $_FILES['photo']['tmp_name'];
    $upload_dir = "upload/";
    if (!is_dir($upload_dir))
        mkdir($upload_dir, 0777, true);
    if (move_uploaded_file($temp_name, $upload_dir . $filename)) {
        echo " File upload sucessfully ! <br><br>";
        ?>
        <img src="<?php echo $upload_dir . $filename; ?>" height="300" width="300">
        <?php
        echo "<br> Filename:$filename<br>";
        echo " fileType:$filetype<br>";
        echo "filesize :" . ($filesize / 1024) . "kB";
    } else {
        echo " File upload Failed !";
    }
} else {
    echo " File not uploaded!......";
}
?>