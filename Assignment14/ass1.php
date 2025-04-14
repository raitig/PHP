<?php
$message="";
$filename="";
$filecontent="";
if($_SERVER['REQUEST_METHOD']=="POST"){
    $filename=trim($_POST['filename']);
    $filecontent=$_POST['message'];
    $task=$_POST['task'];
    $directory="data/";
    if(!is_dir($directory))
    mkdir($directory,0777,true);
$fullpath=$directory.$filename;
switch($task){
    case 'Create':
        if(!file_exists($fullpath)){
            file_put_contents($fullpath,$filecontent);
            $message="File created sucessfully";
        }
        else
        $message="File Already exists :";
    break;
    case 'Read':
        if(file_exists($fullpath)){
            $content=file_get_contents($fullpath);
            echo "<h3> File content is : </h3>";
            echo "$content<br>";
            $message="<br> File read sucessfully.";
        }
        else
        echo"File Doesn't Exist!.";
    break;
    case 'Append':
        if(file_exists($fullpath)){
            file_put_contents($fullpath,$filecontent,FILE_APPEND);
            $message="Content append sucessfully ";
        }
        else
        $message="File Doesn't Exist !";
    break;
}
echo "<br> $message";
}
?>