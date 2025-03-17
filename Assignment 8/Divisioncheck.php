<?php
$num=$_POST['num'];
echo "<h3> Division table of $num </h3>";
for($i=1;$i<=10;$i++){
    $res=$num/$i;
    echo "$num / $i = ".number_format($res,2)."<br>";
}
?>