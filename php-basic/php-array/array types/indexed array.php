<?php 
$coloers =array("red","blue","green","yellow","Blackl",50);

// echo $coloers[0]."<br>";
// echo $coloers[1]."<br>";
// echo $coloers[2]."<br>";
// echo $coloers[4] ."<br>";
// echo $coloers[5] ."<br>";
 
// echo "<pre>";
// print_r($coloers);
// echo "<pre>";
 $n=6;
 echo "<ul>";
for($i = 0; $i<$n;$i++){
    echo "<li> $coloers[$i] </li>";
}
echo "</ul>";









?>