<?php

namespace Appp;

class formet
{
    public function validation($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        return $data;
    }
}
