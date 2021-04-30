<?php

namespace App\Models;

use App\Models\Db;


/**
 * абстрактный класс модель запросов для моделей типа "User", "Product" и пр.
 */
abstract class Model
{
    public $id;
    public static $table = '';


    public function findAll() {
        $db = new Db();
        $sql = "SELECT * FROM " . static::$table;
        $cls = get_called_class();
        return $db->getData($sql, $cls);
    }



}