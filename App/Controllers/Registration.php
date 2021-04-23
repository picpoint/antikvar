<?php


namespace App\Controllers;


use App\Models\Model;

class Registration extends Model
{

    public static $table = 'users';
    public $regArr = [];


    public function actionRegistration() {
        if(isset($_POST['regbtn'])) {

            if(!empty($_POST['regfirstname']) && !empty($_POST['reglastname']) && !empty($_POST['reglogin']) && !empty($_POST['regpassword']) ) {
                $this->regArr[] = $_POST['regfirstname'];
                $this->regArr[] = $_POST['reglastname'];
                $this->regArr[] = $_POST['reglogin'];
                $this->regArr[] = $_POST['regpassword'];

                $res = new Model();
                $res = $res->regUser($this->regArr);

                header("Location: index.php");
            } else {
                die("Не все поля заполнены");
            }
        }

    }






}