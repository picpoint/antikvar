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
        if(isset($_POST['regbtn'])) {
            $userData = [];
            $usersLogin = [];

            if(!empty($_POST['regfirstname']) && !empty($_POST['reglastname']) && !empty($_POST['reglogin']) && !empty($_POST['regpassword'])) {
                $userData[] = $_POST['regfirstname'];
                $userData[] = $_POST['reglastname'];
                $userData[] = mb_strtolower($_POST['reglogin']);
                $userData[] = password_hash($_POST['regpassword'], PASSWORD_DEFAULT);

                $getUsrs = Model::findAll();

                foreach ($getUsrs as $usrs) {
                    $usersLogin[] = $usrs->login;
                }

                if (!in_array($_POST['reglogin'], $usersLogin)) {
                    Model::regUserModel(static::$table, $userData);
                    header("Location: /");
                } else {
                    echo "Пользователь с таким логином уже существует";
                }

            } else {
                echo "Не все поля заполнены";
            }
        }
    }



}