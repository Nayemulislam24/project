<h1>mysqli_fetch_all</h1>

<?php
// ==============Procedural style example==============

// $conn = mysqli_connect("localhost","root","","testdb_copy") or die("Database Not Connected");
// $sql = "select * from students";
// $result = mysqli_query($conn, $sql) or die("Not Query Result");

// ==============Object oriented style example===========

$conn = new mysqli("localhost","root","","testdb_copy") or die("Database Not Connected");
$sql = "select * from students";
$result = $conn->query($sql);

// =============mysqli_fetch_ALL example===============
// $row = mysqli_fetch_all($result , MYSQLI_BOTH);
// echo"<pre>";
// print_r($row);
// echo"</pre>";
// echo $row[0]. " " . $row[1]." " . $row[2] ." " . $row[3] ;
// echo"</br>";
// echo $row[0]. " " . $row[1]." " . $row[2] ." " . $row[3];


 // ==============Procedural style example==============
// ==============mysqli_fetch_ALL example==============


// $row = mysqli_fetch_all($result , MYSQLI_BOTH);

// foreach($row as $data){
// echo $data[0]. " " . $data[1]." " . $data[2] ." " . $data[3] ;
// echo"</br>";
// }

// ==============Object oriented style example===========
// ==============mysqli_fetch_ALL example==============
$row = $result->fetch_all(MYSQLI_ASSOC);
foreach($row as $data){
    // echo $data[0]. " " . $data[1]." " . $data[2] ." " . $data[3] ;
    // echo"</br>";
    echo $data['roll']. " " . $data['name']." " . $data['gender'] ." " . $data['age'] ;
    echo"</br>";
    }