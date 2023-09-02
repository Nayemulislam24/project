
<h1>mysqli_fetch_row</h1>
<?php
// ==============Procedural style example==============

// $conn = mysqli_connect("localhost","root","","testdb_copy") or die("Database Not Connected");
// $sql = "select * from students";
// $result = mysqli_query($conn, $sql) or die("Not Query Result");

// ==============Object oriented style example===========

$conn = new mysqli("localhost","root","","testdb_copy") or die("Database Not Connected");
$sql = "select * from students";
$result = $conn->query($sql);
// ???????????????mysqli_fetch_assoc  AND row example?????????????
// $row = mysqli_fetch_assoc($result);
// echo"<pre>";
// print_r($row);
// echo"</pre>";
// echo $row[0]. " " . $row[1]." " . $row[2] ." " . $row[3] ;
// echo"</br>";
// echo $row[0]. " " . $row[1]." " . $row[2] ." " . $row[3];
// ==============Procedural style example==============
// ==============mysqli_fetch_row example==============


// while ($row = mysqli_fetch_row($result)) {
//     echo $row[0]. " " . $row[1]." " . $row[2] ." " . $row[3] ;
//     echo"</br>";
// }


// ==============Object oriented style example===========
// ==============mysqli_fetch_row example==============

while ($row =$result -> fetch_row()) {
    echo $row[0]. " " . $row[1]." " . $row[2] ." " . $row[3] ;
    echo"</br>";
}
?>