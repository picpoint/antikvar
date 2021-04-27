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
    public $authData = [];


    public function actionRegUser() {

        if(isset($_POST['regbtn'])) {
            if(!empty($_POST['regfirstname']) && !empty($_POST['reglastname']) && !empty($_POST['reglogin']) && !empty($_POST['regpassword']) )  {
                $this->regData[] = $_POST['regfirstname'];
                $this->regData[] = $_POST['reglastname'];
                $this->regData[] = mb_strtolower($_POST['reglogin']);
                $this->regData[] = password_hash($_POST['regpassword'], PASSWORD_DEFAULT);

                $reg = new Model();
                $reg->regUser($this->regData, $this->table);
                header("Location: /");
            } else {
                echo "Не все поля заполнены";
            }
        }

    }



    public function actionAuthUser() {
        if(isset($_POST['authbtn'])) {
            if(!empty($_POST['authlogin']) && !empty($_POST['authpass'])) {
                $this->authData[] = $_POST['authlogin'];
                $this->authData[] = $_POST['authpass'];

                $allUsers = new Model();
                print_r($allUsers->getAllUsers($this->table));
            }
        }
    }


}