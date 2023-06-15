<?php

namespace Appp;

// class database
// {

//     private $db_host = "localhost";
//     private $db_user = "root";
//     private $db_pass = "";
//     private $db_name = "db_lr";

//     public $connected;
//     public $result;
//     public $error = [];

//     //DATABASE CONNECTION===========
//     public function __construct()
//     {
//         $this->connected = new mysqli($this->db_host, $this->db_user, $this->db_pass, $this->db_name);
//         if (!$this->connected) {
//             $this->error = "connection is faild" . $this->connected->connect_error;
//             return false;
//         }
//         echo "database connected";
//     }


//     // Database connection close
//     public function __destruct()
//     {
//         if ($this->connected) {
//             $this->connected->close();
//             // echo "<br>";
//             echo "No connected";
//         }
//     }
// }