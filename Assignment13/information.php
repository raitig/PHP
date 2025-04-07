<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST['myname'];
    $address=$_POST['address'];
    $age=$_POST['age'];
    $password=$_POST['pass'];
    $directory="data/";
    if(! is_dir($directory))
    mkdir($directory,0777,true);
$filename=$directory.$name.".txt";
if(is_file($filename))
echo"$filename already exists..";
else{
    $file=fopen($filename,"w");
    fwrite($file,"Name : $name\n");
    fwrite($file,"Address : $address\n");
    fwrite($file,"Age : $age\n");
    fwrite($file,"Password : $password\n");
    echo"Data saved sucessfully !";
}
}
else
echo"Data Not Uploaded !..";
?>