<h1>mysqli_fetch_field</h1>

<?php
include 'config.php';

// =============mysqli_fetch_ALL example===============
$row = mysqli_fetch_fields($result);
echo"<pre>";
print_r($row);
echo"</pre>";
// echo $row[0]. " " . $row[1]." " . $row[2] ." " . $row[3] ;
// echo"</br>";
// echo $row[0]. " " . $row[1]." " . $row[2] ." " . $row[3];
?>