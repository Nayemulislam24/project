<h1>mysqli_fetch_array</h1>
<?php
include 'config.php';

// $row = mysqli_fetch_array($result, MYSQLI_BOTH);
// echo "<pre>";
// print_r($row);
// echo "</pre>";
// echo $row[0] . " " . $row[1] . " " . $row[2] . " " . $row[3];
// echo "</br>";
// echo $row[0] . " " . $row[1] . " " . $row[2] . " " . $row[3];


// ==============Object oriented style example===========
// ==============mysqli_fetch_assoc example==============
// while($row = $result ->fetch_array()){
//     echo $row[0] . " " . $row[1] . " " . $row[2] . " " . $row[3];
//     echo "</br>";
// echo $row['roll']. " " . $row['name']." " . $row['gender'] ." " . $row['age'] ;
// echo"</br>";
// }

// ==============Procedural style example==============
// ==============mysqli_fetch_assoc example==============
while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
    echo $row[0] . " " . $row[1] . " " . $row[2] . " " . $row[3];
    echo "</br>";
    // echo $row['roll']. " " . $row['name']." " . $row['gender'] ." " . $row['age'] ;
    // echo"</br>";
}
?>