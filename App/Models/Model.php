<?php

namespace App\Models;

use App\Models\Db;

class Model
{

    public function save() {
        $db = new Db();
        $sql = "INSERT INTO users (firsname, lastname, login, password) VALUES ('Vasya', 'Pupkin', 'vaspup', '2203') ";
        $sth = $db->prepare($sql);
        return $sth->execute();
    }

}