<?php
echo"<h1>array_intersect</h2>";

$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");

$result=array_intersect($a1,$a2);
echo "<pre>";
print_r($result);
echo "</pre>";


echo"<h1>array_intersect_assoc</h2>";


$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"white");

$result=array_intersect_assoc($a1,$a2);
echo "<pre>";
print_r($result);
echo "</pre>";


?>