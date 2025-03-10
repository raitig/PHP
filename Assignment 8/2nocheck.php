<?php
$str=$_POST['names'];
$namearr=explode(' ',$str);
echo "<h2> Name list of friends :</h2>";
$i=1;
foreach($namearr as $n){
    echo "$i.$n<br>";
    $i++;
}
echo"<h2> sorted name list</h2>";
sort($namearr); //Sort function besically use for sort the array in assending order.
$i=1;
foreach($namearr as $n){
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