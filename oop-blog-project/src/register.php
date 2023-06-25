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
    }
}
