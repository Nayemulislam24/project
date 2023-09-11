<?php
$cars = array(
    array("Volvo", 22, 18, 18),
    array("BMW", 15, 13, 18),
    array("Saab", 5, 2, 18),
    array("Land ", 17, 15, 18),
    array("Land Rover", 17, 15, 18)
);

// SS
//   echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
$n = 4;

// for ($row = 0; $row < $n; $row++) {
//     for ($col = 0; $col < $n; $col++) {
//         echo $cars[$row][$col] . ",";
//     }
//     echo "<br>";
// }
echo "<table border :2px cellpadding:'0' >";
echo "<tr>
        <th>Brand</th>
        <th>in stok</th>
        <th>Aviable</th>
        <th>No</th>
    </tr>";
foreach ($cars as $value) {
    echo "<tr>";
    foreach ($value as $value2) {
        echo "<td>$value2 </td>" . "";
    }
    echo "</tr>";
}
echo "</table>";

// echo"<pre>";
// var_dump($cars);
// echo"</pre>";