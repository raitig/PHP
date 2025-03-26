<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $files = $_FILES['file'];
    $filename = $_FILES['file']['name'];
    $filetype = $_FILES['file']['type'];
    $filesize = $_FILES['file']['size'];
    $file_tem_name = $_FILES['file']['tmp_name'];
    $upload_loc = "upload/";
    if (!is_dir($upload_loc)) {
        mkdir($upload_loc, 077, true);
    }
    if (move_uploaded_file($file_tem_name, $upload_loc . $filename)) {
        echo "File upload succesfully .";
        echo "Filename: $filename<br>";
        echo "File type :<br>";
        echo "File Size :" . ($filesize / 1024) . "K.B";
        echo "<br>stored in :" . $upload_loc . $filename;
    } else {
        echo " File upload fail!.........";
    }
} else {
    echo "No file uploaded!.......";
}
