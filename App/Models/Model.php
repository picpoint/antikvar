<?php

namespace App\Models;


abstract class Model
{

    public $id;
    public static $table = '';

    /**
     * поиск всех записей в таблице
     */
    public static function findAll($table, $class) {
        $db = new Db();
        $sql = "SELECT * FROM " . $table;
        return $db->getData($sql, $class);
    }


    /**
     * регистрация пользователей
     */
    public static function regUserModel($table, $userData) {
        $db = new Db();
        $firstname = $userData[0];
        $lastname = $userData[1];
        $login = $userData[2];
        $password = $userData[3];
        $sql = "INSERT INTO " . $table . " (firstname, lastname, login, password) VALUES ('$firstname', '$lastname', '$login', '$password')";
        $db->save($sql);
    }


    /**
     * метод встаки в БД данных
     */
    public static function insert($arrData, $table, $params) {
        $db = new Db();
        $ks = [];
        $vls = [];

        $user = $arrData[0];
        $prodarticle = $arrData[1];
        $prodname = $arrData[2];
        $prodprice = $arrData[3];
        $proddesc = $arrData[4];
        $prodcategory = $arrData[5];
        $pathPhoto = $arrData[6];

        foreach ($params as $key => $value) {
            if ($key == 'id') {
                continue;
            }
            $ks[] = $key;
            $vls[] = $value;
        }

//        $sql = "INSERT INTO " . $table . " (user, articule, name, price, description, category, photo) VALUES ('$user', '$prodarticle', '$prodname', '$prodprice', '$proddesc', '$prodcategory', '$pathPhoto') ";
        $sql = "INSERT INTO " . $table . " (" . implode(", ", $ks) .  ") VALUES ('" . implode("', '", $arrData) . "')";
        print_r($sql);
        die;
        $db->save($sql);


    }


}