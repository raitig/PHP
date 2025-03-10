<?php
$str=$_POST['names'];
$namearr=explode(' ',$str);
echo "<h2> Name list of friends :</h2>";
$i=1;
foreach($namearr as $n){
    echo "$i.$n<br>";
    $i++;
}
?>