<?php
$coloers =array("red","blue","green","yellow","Blackl",50);
// echo count($coloers);
// echo "<br>";
// echo sizeof($coloers);
// echo "<br>";



$n = sizeof($coloers);

echo "<ul>";
for($i = 0; $i<$n;$i++){
   echo "<li> $coloers[$i] </li>";
}
echo "</ul>";

$cars = array(
   "Nayem"=> array("Volvo", 22, 18, 18),
    "Zannat"=>array("BMW", 15, 13, 18),
    "salam"=>array("Saab", 5, 2, 18),
    "habib"=>array("Land ", 17, 15, 18),
    "helal"=>array("Land Rover", 17, 15, 18)
);

echo count($cars['Nayem'],1);