<?php

namespace App\Models;

use App\Models\Db;


class User extends Model
{


    public $firstname;
    public $lastname;
    public $login;
    public $password;

    public static $table = 'users';



}