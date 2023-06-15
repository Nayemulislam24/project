<?php
// namespace appp\header;

require __DIR__ . '/vendor/autoload.php';

use Appp\hello;
use Appp\Welcome;



$obj = new  Welcome();
$object = new  hello();


echo $object->sayhi();

echo $obj->sayheworld();






// include 'app/header.php';
// include 'app\database.php';
// require __DIR__ . '/vendor/autoload.php';

// use Appp\header;