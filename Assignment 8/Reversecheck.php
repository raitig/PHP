<?php
$str=$_POST['names'];
$namearr=explode(",",$str);
echo "<h2> Name list after removing last element </h2>";
array_pop($namearr);
foreach($namearr as $n){
    echo "$n<br>";
}
echo"<h2> Name list in reverse oder </h2>";
$namerev=array_reverse($namearr);
foreach($namerev as $n){
    echo "$n<br>";
}
?>