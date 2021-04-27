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

    public $table = 'users';
    public $regData = [];


    public function someUsr() {
        $this->regData[] = $_POST['regfirstname'];
        $this->regData[] = $_POST['reglastname'];
        $this->regData[] = mb_strtolower($_POST['reglogin']);
        $this->regData[] = password_hash($_POST['regpassword'], PASSWORD_DEFAULT);

        $reg = new Model();
        return $reg->regUser($this->regData, $this->table);
    }


}