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


    public static function regUserModel($table, $userData) {
        $db = new Db();
        $firstname = $userData[0];
        $lastname = $userData[1];
        $login = $userData[2];
        $password = $userData[3];
        $sql = "INSERT INTO " . $table . " (firstname, lastname, login, password) VALUES ('$firstname', '$lastname', '$login', '$password')";
        $db->save($sql);
    }


}