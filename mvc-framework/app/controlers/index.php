<?php
// index controller//

class index extends Dcontroller
{
    public function __construct(){
        parent::__construct();
    }
    public function index(){
        echo "text defult index page  controllers";
    }
    public function home(){
       $this->load->view("home");
    }
}
