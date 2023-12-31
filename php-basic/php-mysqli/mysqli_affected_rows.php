<h1>mysqli_affected_rows</h1>
<?php
// ==============Procedural style example==============

// $conn = mysqli_connect("localhost","root","","testdb_copy") or die("Database Not Connected");
// $sql = "select * from students";
// $result = mysqli_query($conn, $sql) or die("Not Query Result");

// ==============Object oriented style example===========

$conn = new mysqli("localhost","root","","testdb_copy") or die("Database Not Connected");
$sql = "select * from students";
$result = $conn->query($sql);
echo "Total Rows :" . mysqli_affected_rows($conn);
?>