<?php
$directory=$_POST['path'];

$files = scandir($directory);
echo "<h3> Files in the directory : </h3>";
foreach($files as $f){
    if($f!="." && $f!=".."){
        echo "$f<br>";
    }
    // echo $f."<br>";
}
?>