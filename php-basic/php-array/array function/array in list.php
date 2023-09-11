<?php
$emp = [
    [1, "Hasan", "selsmen", 50000],
    [2, "salam", "menager", 50000],
    [3, "mehidi", "Developer", 50000],
    [4, "ashik", "operator", 50000],
    [5, "zannat", "Driver", 50000],
    [6, "habib", "selsmen", 50000]
];
echo "<table border :2px cellpadding = '5px' cellspacing = '0px' >";
echo "<tr>
        <th>ID</th>
        <th>NaME</th>
        <th>POST</th>
        <th>SELARY</th>
    </tr>";
foreach ($emp as list($id, $name, $Post, $selary)) {
    echo "<tr><td>$id</td><td> $name </td><td>$Post</td><td> $selary</td> </tr>";
}
echo "</table>";
echo "<br>";

// $my_array = array("Dog", "Cat", "Horse");

// list($a, $b, $c) = $my_array;
// echo "I have several animals, a $a, a $b and a $c.";


$friends = [
    [
        "ID"=>"1",
        "name" => "Mark",
        "country" => "USA"
    ],
    [
        "ID"=>"2",
        "name" => "Jeff",
        "country" => "Japan"
    ],
    [
        "ID"=>"3",
        "name" => "Raymond",
        "country" => "United Kingdom"
    ]
];

echo "<table border :2px cellpadding = '5px' cellspacing = '0px' >";
echo "<tr>
        <th>ID</th>
        <th>NaME</th>
        <th>POST</th>
        <th>SELARY</th>
    </tr>";
foreach ($friends as list("ID"=>$id,"name"=> $name,"country"=> $country)) {
    echo "<tr><td>$id</td><td> $name </td><td>$country</td></tr>";
}
echo "</table>";
