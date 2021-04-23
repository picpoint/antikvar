<?php

namespace App\Models;

use App\Models\Db;

class Model
{

    public function regUser(array $arrData) {
        $db = new Db();
        $fistname = $arrData[0];
        $lastname = $arrData[1];
        $login = $arrData[2];
        $password = password_hash($arrData[3], PASSWORD_DEFAULT);
        $sql = "INSERT INTO `users` (`firstname`, `lastname`, `login`, `password`) VALUES ('$fistname', '$lastname', '$login', '$password')";
        return $db->execsql($sql);
    }

}