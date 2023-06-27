<?php

namespace Appp;

// use mysqli;

class database
{

    private $db_host = "localhost";
    private $db_user = "root";
    private $db_pass = "";
    private $db_name = "project";


    public $connected;
    public $result;
    public $error = [];

    //DATABASE CONNECTION===========
    public function __construct()
    {
        $this->connected =  new \mysqli($this->db_host, $this->db_user, $this->db_pass, $this->db_name);
        if (!$this->connected) {
            $this->error = "connection is faild" . $this->connected->connect_error;
            return false;
        }
        // echo "database connected";
    }
    //======== Data select======
    public function select($query)
    {
        $result = $this->connected->query($query) or die($this->connected->error . __LINE__);
        if ($result->num_rows > 0) {
            return $result;
        } else {
            return false;
        }
    }
    // =========Data insert======
    public function insert($query)
    {
        $result = $this->connected->query($query) or die($this->connected->error . __LINE__);
        if ($result) {
            return $result;
        } else {
            return false;
        }
    }
    // ========= data delete============
    public function delete($query)
    {
        $result = $this->connected->query($query) or die($this->connected->error . __LINE__);
        if ($result) {
            return $result;
        } else {
            return false;
        }
    }
    // ======= update data========
    public function update($query)
    {
        $result = $this->connected->query($query) or die($this->connected->error . __LINE__);
        if ($result) {
            return $result;
        } else {
            return false;
        }
    }



    // Database connection close
    public function __destruct()
    {
        if ($this->connected) {
            $this->connected->close();
            // echo "<br>";
            // echo "No connected";
        }
    }
}
// $obj = new databse();