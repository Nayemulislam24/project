<?php
echo "<h1>array_keys</h2>";
$color=array("red","green","blue");

$newarray = array_keys($color);

echo"<pre>";
print_r($newarray) ;
echo"</pre>";

echo "<br>";
$colors=array("red","green","blue");
echo "<h1>array_key_first</h2>";
$newarray = array_key_first($colors);

echo"<pre>";
print_r($newarray) ;
echo"</pre>";

echo "<h1>array_key_last</h2>";
echo "<br>";
$colors=array("red","green","blue");
$newarray = array_key_last($colors);

echo"<pre>";
print_r($newarray) ;
echo"</pre>";


echo "<h1>array_key_exsits then if else</h2>";
echo "<br>";

$a=array("Volvo"=>"XC90","BMW"=>"X5");
if (array_key_exists("BMW",$a))
  {
  echo "Key exists!";
  }
else
  {
  echo "Key does not exist!";
  }