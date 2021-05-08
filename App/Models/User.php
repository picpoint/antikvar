<?php

namespace App\Models;



class User extends Model
{

    public $firstname;
    public $lastname;
    public $login;
    public $password;

    public static $table = 'users';



}