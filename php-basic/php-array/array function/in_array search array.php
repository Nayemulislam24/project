<?php
$coloers = array("red", "blue", "green", "yellow", "Blackl", 50);
 
echo(in_array("red",$coloers));


echo "<br>";

$people = array("Peter", "Joe", "Glenn", "Cleveland");

if (in_array("Glenn", $people))
  {
  echo "Match found";
  }
else
  {
  echo "Match not found";
  }


  echo "<br>";
  
if (in_array("23", $people, false))
{
echo "Match found<br>";
}
else
{
echo "Match not found<br>";
}
if (in_array("Glenn",$people, TRUE))
{
echo "Match found<br>";
}
else
{
echo "Match not found<br>";
}

if (in_array(23,$people, TRUE))
{
echo "Match found<br>";
}
else
{
echo "Match not found<br>";
}
//========= php functon in_search============

$a=array("a"=>"red","b"=>"green","c"=>"blue");
echo array_search("blue",$a);
echo "<br>";
$coloers = array("red", "blue", "green", "yellow", "Blackl", 50);
echo array_search("green",$coloers);


