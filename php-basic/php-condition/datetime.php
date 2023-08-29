<?php

$tomorrow = mktime(0, 0, 0, date("m"), date("d") + 1, date("y"));

echo "Tomorrow is " . date("m/d/y", $tomorrow);





$date = new DateTime('2006-12-12');
$date->modify('+1 day');
echo $date->format('Y-m-d');
