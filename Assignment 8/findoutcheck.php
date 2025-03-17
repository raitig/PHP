<?php
$name=$_POST['names'];
$namearr=explode(",",$name);
$tosearch=$_POST['search'];
$i=0;
$flag=0;
foreach($namearr as $n){
    if(trim($n)==$tosearch){
        $flag=1;
        break;
    }
    $i++;
}
if($flag==1)
echo"$tosearch found at position $i";
else
echo"$tosearch not present in the list";
?>