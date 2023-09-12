<?php
$a=array("a"=>"red","b"=>"green","c"=>"blue");
$b=array("d"=>"yellow","e"=>"greenb","f"=>"bluer","g"=>"white");


$multicolor = array_merge($a,$b);

echo"<pre>";
print_r($multicolor);
echo"</pre>";
echo"<br>";

$color=array("a"=>"red","b"=>"green","c"=>"blue");
$ciolors=array("b"=>"yellow","e"=>"greenb","f"=>"bluer","g"=>"white");


$multicolor2 = array_merge_recursive($color,$ciolors);

echo"<pre>";
print_r($multicolor2);
echo"</pre>";
