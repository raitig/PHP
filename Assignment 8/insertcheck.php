<?php
$name=$_POST['names'];
$pos=$_POST['pos'];
$newname=$_POST['name1'];
$namearr=explode(",",$name);
echo "<h2> Name list after inserting the element : </h2>";
array_splice($namearr,$pos,0,$newname);
foreach($namearr as $n)
echo $n."<br>";
?>
