<?php

namespace App\Models;

use App\Models\Db;

class Model
{

//    public static $table = '';



    public function getAllUsers($table) {
        $db = new Db();
        $sql = "SELECT * FROM " . $table;
        return $db->findAll($sql);
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