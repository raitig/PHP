<--!Write a program in PHP to get current directory, filename and code line number -->
<?php
$curdir=__DIR__;
$filename=__FILE__;
$line=__LINE__;
echo "Current Directory : $curdir<br>";
echo "Filename: $filename<br>";
echo "code line number : $line<br>"
?>
