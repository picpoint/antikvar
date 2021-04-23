<?php

namespace App\Models;

use App\Models\Db;

class Model
{

    public function save(array $arrData) {
        $db = new Db();
        $sql = "INSERT INTO `users` (`firstname`, `lastname`, `login`, `password`) VALUES ('$arrData[0]', '$arrData[1]', '$arrData[2]', '$arrData[3]')";
        return $db->execsql($sql);
    }

}