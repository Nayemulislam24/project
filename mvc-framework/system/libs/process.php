<?php

// class load 

class process
{
    public function __construct()
    {
        echo " load class test parent  controller.<br>";
        echo " load class test parent  controller.<br>";
        echo " load class test parent  controller.<br>";
    }
    public function view($file_name){
        include'app/views/'.$file_name.'.php';
    }
}
