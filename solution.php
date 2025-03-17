<?php
$str="php program-the complete SOLUTION for web development";
echo "<h2> Converting lower case to upper case </h2>";
echo strtoupper($str)."<br><br>";
echo "<h2> Converting upper case to lower case </h2>";
echo strtolower($str)."<br><br>";
echo "<h2> onverting only first character to uppercase</h2>";
echo ucfirst($str)."<br><br>";
echo "<h2> Converting first chracter of each word to uppercase</h2>";
echo ucwords($str)."<br><br>";
echo "<h2> Displaying last 11 chracters : </h2>";
echo substr($str,-11);
?>