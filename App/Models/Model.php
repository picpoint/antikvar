<?php

namespace App\Models;


abstract class Model
{

    public $id;
    public static $table = '';


    public function findAll() {
        $db = new Db();
        $class = get_called_class();
        $sql = "SELECT * FROM " . static::$table;
        return $db->getData($sql, $class);
    }





}