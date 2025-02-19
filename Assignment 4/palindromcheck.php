<?php
$n = $_POST['num1'];
$s=$n;
$r=0;
while($n>0){
    $d=$n%10;
    $r=($r*10)+$d;
    $n=(int)($n/10);
}
if($r==$s)
echo"$ s is palindrom.";
else
echo"$ s is not palindrom.";
?>