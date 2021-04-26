<?php

namespace App\Models;

use App\Models\Db;

class Model
{

    public static $table = '';



    public function getAll() {
        $db = new Db();
        $sql = "SELECT * FROM users";
        return $db->execute($sql);
    }



    public function regUser() {
        $db = new Db();
        $sql = "INSERT INTO " . static::$table . " (`firstname`, `lastname`, `login`, `password`) VALUES ('Vasya', 'Pupkin', 'vaspup', '123456qwerty') ";
        return $db->execute($sql);
    }

}