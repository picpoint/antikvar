<?php

namespace App\Models;

use App\Models\Db;


abstract class Model
{
    public $id;
    public static $table = '';


    public function findAll() {
        $db = new Db();
        $sql = "SELECT * FROM " . static::$table;
        return $db->getData($sql);
    }



}