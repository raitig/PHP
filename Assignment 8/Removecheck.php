<?php
$str=$_POST['names'];
$namearr=explode(",",$str);
echo "<h2> Name list after removing last element </h2>";
array_pop($namearr);
foreach($namearr as $n){
    echo "$n<br>";
}
?>
