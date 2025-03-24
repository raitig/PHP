<?php
$url =$_POST['link'];
$urlinfo=parse_url($url);
echo "<h3> URL Information </h3>";
echo "scheme :".(isset($urlinfo['scheme'])?$urlinfo['scheme']:"N/A")."<br>";
echo "Host :".(isset($urlinfo['host'])?$urlinfo['host']:"N/A")."<br>";
echo "Path :".(isset($urlinfo['path'])?$urlinfo['path']:"N/A")."<br>";
?>
