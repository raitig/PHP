<?php
$n=$_POST['num'];
$f=1;
for($i=$n;$i>=1;$i--)
{
    $f=$f*$i;
}
Echo " factorial of $n is :$f ";
?>