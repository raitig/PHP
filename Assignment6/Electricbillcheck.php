<?php
$units=$_POST["units"];
$bill=0;
if($units<=50)
$bill=$units*3.50;
elseif($units<=150)
$bill=(50*3.50)+(($units-50)*4.0);
elseif($units<=250)
$bill=(50*3.50)+(100*4.0)+(($units-150)*5.20);
else
$bill=(50*3.50)+(100*4.0)+(100*5.20)+(($unit-250)*6.20);
echo "Total Bill :".$bill;
?>