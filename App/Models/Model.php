<?php

namespace App\Models;

use App\Models\Db;

class Model
{


    public function getAll() {
        $db = new Db();
        $sql = "SELECT * FROM users";
        return $db->execute($sql);
    }



    public function regUser() {
        $db = new Db();
        $sql = "INSERT INTO `users` (`firstname`, `lastname`, `login`, `password`) VALUES ('Vasya', 'Pupkin', 'vaspup', '123456qwerty') ";
        $sth = $db->prepare($sql);
        return $sth->execute();
    }

}