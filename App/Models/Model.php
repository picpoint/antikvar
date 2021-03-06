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
     * метод для запросе в БД, получить все записи текущего пользователя
     */
    public static function findAllLotsCurrentUser($table, $user, $class) {
        $db = new Db();
        $sql = "SELECT * FROM " . $table . " WHERE user='$user'";
        return $db->getData($sql, $class);
    }


    public static function findLotsByCategory($table, $category, $class) {
        $db = new Db();
        $sql = "SELECT * FROM " . $table . " WHERE category='$category'";
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
    public static function insert($arrData, $table) {
        $db = new Db();
        $user = $arrData[0];
        $prodarticle = $arrData[1];
        $prodname = $arrData[2];
        $prodprice = $arrData[3];
        $proddesc = $arrData[4];
        $prodcategory = $arrData[5];
        $pathPhoto = $arrData[6];
        $sql = "INSERT INTO " . $table . " (user, articule, name, price, description, category, photo) VALUES ('$user', '$prodarticle', '$prodname', '$prodprice', '$proddesc', '$prodcategory', '$pathPhoto') ";
        $db->save($sql);
    }


}