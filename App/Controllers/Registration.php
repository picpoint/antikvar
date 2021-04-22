<?php


namespace App\Controllers;


use App\Models\Model;

class Registration extends Model
{

    public static $table = 'users';
    public $regArr = [];


    public function actionRegistration() {
        if(isset($_POST['regbtn'])) {
            $this->regArr[] = $_POST['regfirstname'];
            $this->regArr[] = $_POST['reglastname'];
            $this->regArr[] = $_POST['reglogin'];
            $this->regArr[] = $_POST['regpassword'];

            $res = new Model();
            $res->save();
//            var_dump($this->regArr);
        }
    }






}