<?php
$color=array("red","green","blue");
$colors=array("white","yellow","sky");

array_splice($color,0,2,$colors);

echo"<pre>";
print_r($color) ;
echo"</pre>";