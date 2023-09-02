<?php

$conn = mysqli_connect("localhost","root","","testdb_copy") or die("Database Not Connected");
$sql = "select * from students";
$result = mysqli_query($conn, $sql) or die("Not Query Result");

// ???????????????mysqli_fetch_assoc  AND row example?????????????

// $row = mysqli_fetch_assoc($result);
// echo"<pre>";
// print_r($row);
// echo"</pre>";
// echo $row[0]. " " . $row[1]." " . $row[2] ." " . $row[3] ;
// echo"</br>";
// echo $row[0]. " " . $row[1]." " . $row[2] ." " . $row[3];

// ???????????????mysqli_fetch_row example?????????????


// while ($row = mysqli_fetch_row($result)) {
//     echo $row[0]. " " . $row[1]." " . $row[2] ." " . $row[3] ;
//     echo"</br>";
// }


// ???????????????mysqli_fetch_asssoc example?????????????


// while ($row = mysqli_fetch_assoc($result)) {
//     echo $row['roll']. " " . $row['name']." " . $row['gender'] ." " . $row['age'] ;
//     echo"</br>";
// }

while ($row =$result -> fetch_assoc()) {
    echo $row['roll']. " " . $row['name']." " . $row['gender'] ." " . $row['age'] ;
    echo"</br>";
}

$row =$result -> fetch_assoc();
?>