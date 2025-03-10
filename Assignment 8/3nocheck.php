<?php
$str=$_POST['names'];
$namearr=explode(' ',$str);
$arrunique=array_unique($namearr);
echo"<h2> Distric Name List </h2>";
$i=1;
foreach($namearr as $n){
    echo "$i.$n<br>";
    $i++;
}
foreach($arrunique as $n){
    echo "$i.$n<br>";
    $i++;
}
echo "<h2> Reverse sorted name list </h2>";
$i= 1;
rsort( $namearr ); //rsort function besically use for reverse the array in decending order.
foreach($namearr as $n){
    echo "$i.$n<br>";
    $i++;
}
?>






