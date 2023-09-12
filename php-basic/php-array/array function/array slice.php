<?php
$color=array("red","green","blue");

$result = array_slice($color,1,2,true);
echo"<pre>";
print_r($result) ;
echo"</pre>";