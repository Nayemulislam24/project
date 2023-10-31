<?php
include("load.php");
// main controller

class Dcontroller
{ 
protected $load = array();
    public function __construct()
    {
        $this->load = new load();
    }
}
