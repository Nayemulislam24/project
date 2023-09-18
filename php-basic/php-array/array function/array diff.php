<h1>array_diff()</h1>
<?php
$a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
$a2 = array("e" => "red", "f" => "green", "g" => "blue");
$result = array_diff($a1, $a2);
echo "<pre>";
print_r($result);
echo "</pre>";
$arr1 = array('id' => 15, 'name' => 'rejoan', 29);
$arr2 = array('customer_id' => 15, 'name' => 'rejoan', 21);
$x = array_diff($arr1, $arr2);
echo '<pre>';
print_r($x);


echo "<h2>array_diff_key()</h2>";
