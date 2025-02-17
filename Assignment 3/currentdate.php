// write a php program to display current date using getdate() function
<?php
echo"<h2>current date</h2>";
$mydate =getdate();
echo"$mydate[weekday],$mydate[month]   $mydate[mday],$mydate[year]";
?>