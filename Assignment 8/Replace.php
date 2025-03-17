<?php
$str="php program-the complete SOLUTION for WEB development";
$newstr=preg_replace('/\b the \b/',"best",$str,1);
echo"<h2> Replace first 'the' with 'best'</h2>";
echo $newstr;
echo"<h2> Displaying second word</h2>";
$str1 =explode(" ",$str);
echo $str1[1];
echo "<h2> Inserting word into specefic position </h2>";
$n = substr_replace($str,"awesome",18,0);
echo $n;
?>