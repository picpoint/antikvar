<?php

namespace App\Models;



class User extends Model
{

    public $firstname;
    public $lastname;
    public $login;
    public $password;

    public static $table = 'users';


    public function regUser() {
        $userData = [];
        if(isset($_POST['regbtn'])) {
            if(!empty($_POST['regfirstname']) && !empty($_POST['reglastname']) && !empty($_POST['reglogin']) && !empty($_POST['regpassword'])) {
                $userData[] = $_POST['regfirstname'];
                $userData[] = $_POST['reglastname'];
                $userData[] = mb_strtolower($_POST['reglogin']);
                $userData[] = password_hash($_POST['regpassword'], PASSWORD_DEFAULT);
                Model::regUserModel(static::$table, $userData);
            } else {
                echo "Не все поля заполнены";
            }
        }
    }



}