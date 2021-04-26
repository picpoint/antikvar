<?php


namespace App\Controllers;

use App\Models\Model;



class User extends Model
{

    public $id;
    public $firstname;
    public $lastname;
    public $login;
    public $password;

    public static $table = 'users';


    public function someUsr() {
        print_r($_POST['regfirstname']);
    }


}