<?php include "inc/header.php"; ?>
<?php
include "system/libs/main.php";
include "system/libs/Dcontroller.php";
include "system/libs/process.php";
$url = isset($_GET['url']) ? $_GET['url'] : NULL;
if ($url != NULL) {
    $url = rtrim($url, '/');
    $url = explode('/', filter_var($url, FILTER_SANITIZE_URL));
} else {
    unset($url);
}
if (isset($url[0])) {
    include 'app/controlers/'. $url[0] . '.php';
    $obj = new $url[0]();
    $url_call_method = $url[1];
    if (isset($url[2])) {
        $obj->$url_call_method($url[2]);
    } else {
        if (isset($url_call_method)) {
            $obj->$url_call_method();
            // echo $url_call_method;
        } else {
        }
    }
} else {
    include 'app/controlers/index.php';
    $index_contollers = new index();
    $index_contollers->index();
}








// echo "<pre>";
// print_r($url);
// echo "</pre>";
// echo $controlers=$url[0]."<br>";
// echo $method=$url[1]."<br>";
// echo $pramiter=$url[2]."<br>";
?>


<?php include "inc/footer.php"; ?>