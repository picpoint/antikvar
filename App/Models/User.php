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
            if(!empty($_POST['regfirstname']) && !empty($_POST['reglastname']) && !empty($_POST['reglogin']) && !empty($_POST['regpassword'])) {

            } else {
                echo "Не все поля заполнены";
            }
        }
    }



}