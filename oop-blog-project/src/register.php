<?php

namespace Appp;

require_once __DIR__ . '../../vendor/autoload.php';

// use Appp\database;

use Appp\database;
use Appp\formet;
// use Appp\formet\formet as FormetFormet;

class register
{
    public $db;
    public $formet;
    public function __construct()
    {
        $this->db = new database();
        $this->formet = new formet();
    }

    public function addUser($data)
    {
        $name = $this->formet->validation($data['name']);
        $phone = $this->formet->validation($data['phone']);
        $email = $this->formet->validation($data['email']);
        $passwoed = $this->formet->validation($data['password']);
        $_token = md5(rand());
        $result_query = "SELECT * FROM tbl_user Where email = '$email'";
        $check_email = $this->db->select($result_query);
        if ($check_email > 0) {
            $error = "This Email is alrady Exisit";
            return $error;
            header("location:register-form.php");
        }
    }
}
