<?php
$n=$_POST['num'];
$a=0;
$b= 1;
echo"<h2> Fibonacci series upto $n terms :</h2>";
echo $a."<br>".$b;
for ($i= 2; $i < $n; $i++){
    $c=$a+$b;
    echo"<br>$c";
    $a=$b;
    $b=$c;
}
?>