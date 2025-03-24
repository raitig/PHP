<!-- Write a php program to detect remote device is mobibe device or not -->
 <?php
 if(preg_match('/Mobile|Android|iphone|ipad|ipod|Black berry|windows phone/',$_SERVER['HTTP_USER_AGENT'])){
    echo " This ia a mobile device...........";
 }
 else{
    echo "This is not a mobile device.........";
 }
 ?>