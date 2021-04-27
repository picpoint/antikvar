<?php

namespace App\Models;

use App\Models\Db;

class Model
{

//    public static $table = '';



    public function getAll() {
        $db = new Db();
        $sql = "SELECT * FROM users";
        return $db->execute($sql);
    }



    public function regUser($data, $table) {
        $db = new Db();
        $firstname = $data[0];
        $lastname = $data[1];
        $login = $data[2];
        $password = $data[3];
        $sql = "INSERT INTO " . $table . " (`firstname`, `lastname`, `login`, `password`) VALUES ('$firstname', '$lastname', '$login', '$password') ";
        return $db->execute($sql);
    }

}