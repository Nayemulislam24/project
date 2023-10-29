<?php
class testController extends Dcontroller
{
    public function __construct()
    {
        // parent::__construct();
    }
    public function testMethod($testParamiter){
        echo "test Method dinamically  system $testParamiter";
    }
    public function testMethod2($testParamiter){
        echo "test Method dinamically  system complete $testParamiter";
    }
}
