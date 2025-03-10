<?php
$dob=$_POST['dob'];
$birthdate = new Datetime($dob);
$curdate = new Datetime();
$age = $birthdate->diff($curdate);
echo "your Current Age is :". $age->y;
?>