<?php
$a1=array("a"=>"red","green");
$a2=array("a"=>"orange","b"=>"burgundy");
print_r(array_replace($a1,$a2));


echo"<br>";
$a1=array("red","green");
$a2=array("blue","yellow");
$a3=array("orange","burgundy");
print_r(array_replace($a1,$a2,$a3));