<?php
$age = array(
    "nayem"=>230,
    "ashik"=>20,
    "habib"=>"selem",
    "salam"=>"helal",
    "sk"=>"helal",
    "zannat"=>"helal",
    "nayemuil"=>"helal",
    "Abdul"=>"helal"
);
echo "<ul>";
echo "<li> $age[salam] <li>";
echo "<li> $age[zannat] <li>";
echo "<li> $age[sk] <li>";
echo "</ul>";
echo $age["ashik"] . "<br>";
echo $age["habib"] . "<br>";
echo $age["zannat"] . "<br>";
echo $age["Abdul"] . "<br>";
echo $age["nayemuil"] . "<br>";

echo"<pre>";
print_r($age);
echo"</pre>";

echo"<pre>";
var_dump($age);
echo"</pre>";


foreach($age as $value){
    echo "<li> $value <li>";

}

echo "<ul>";
foreach($age as $key => $value){
    echo "<li> $key = $value <li>";

}
echo "</ul>";