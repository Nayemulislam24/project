<?php include "inc/header.php"; ?>

<?php 
include "system/libs/main.php";
include "system/libs/Dcontroller.php";


$url= $_GET['url'];
$url = rtrim($url,'/');
$url=explode('/',$url);
include 'app/controlers/'.$url[0].'.php';
$obj = new $url[0]();
$url_call_method = $url[1];
$obj->$url_call_method($url[2]);




// echo "<pre>";
// print_r($url);
// echo "</pre>";
// echo $controlers=$url[0]."<br>";
// echo $method=$url[1]."<br>";
// echo $pramiter=$url[2]."<br>";
?>


<?php include "inc/footer.php"; ?>