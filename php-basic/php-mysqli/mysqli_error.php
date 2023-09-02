<h1>mysqli_error</h1>
<?php
// ==============Procedural style example==============

$conn = mysqli_connect("localhost", "root", "", "testdb_copy");

if (!$conn) {
    echo("Connection failed: " . mysqli_connect_error($conn));
}
$sql = "select * from student";
$result = mysqli_query($conn, $sql) or die("Not Query Result");

print_r(mysqli_error_list($conn));
die();

// ==============Object oriented style example===========

// $conn = new mysqli("localhost","root","","testdb_copy") or die("Database Not Connected");
// $sql = "select * from students";
// $result = $conn->query($sql);



if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row['roll'] . " " . $row['name'] . " " . $row['gender'] . " " . $row['age'];
        echo "</br>";
    }
}

?>