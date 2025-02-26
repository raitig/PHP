<?php
$n=$_POST['num'];
$sum=0;
while($n>0){
    $d=$n%10;
    $sum=$sum+$d;
    $n=(int)($n/10);
}
echo "Sum of digits is :".$sum;
?>