<?php
$d =date("H");
if($d>5 && $d< 12)
echo "Good Morning !";
else if($d>=12 && $d< 16)
echo " Good Afternoon !";
else if($d>= 16 && $d< 19)
echo "Good Evening !";
else
echo "Good Night !";
?>