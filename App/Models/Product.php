<?php

namespace App\Models;



class Product extends Model
{

    public $articule;
    public $name;
    public $price;
    public $description;
    public $category;

    public static $table = 'products';



    public function uploadProduct() {
        if (isset($_POST['uploadprod'])) {
            $arrProd = [];
            print_r($_FILES);
            $file = $_FILES;
            echo "<br>";
            echo "<br>";
//            echo $file[]
            echo "<br>";
            echo "<br>";


            if (!empty($file['prodphoto']['size']) && $file['prodphoto']['error'] == 0 && !empty($_POST['prodarticle']) && !empty($_POST['prodname']) && !empty($_POST['prodprice']) && !empty($_POST['proddesc']) && !empty($_POST['prodcategory'])) {
                echo $file['prodphoto']['name'];
                echo "<br>";
                echo $_POST['prodarticle'];
                echo "<br>";
                echo $_POST['prodname'];
                echo "<br>";
                echo $_POST['prodprice'];
                echo "<br>";
                echo $_POST['proddesc'];
                echo "<br>";
                echo $_POST['prodcategory'];
                echo "<br>";
                echo 'USER -> ' . $_SESSION['login'];

                $userLogin = $_SESSION['login'];

                $pathToDir = __DIR__. '/../../public/usersFolders/' . $userLogin;
                echo $pathToDir;
                echo "<br>";
                echo time();


                if (!file_exists($pathToDir)) {
                    mkdir($pathToDir, 0777);
                    move_uploaded_file($_FILES['prodphoto']['tmp_name'], $pathToDir . '/' . time() . '_' . $_FILES['prodphoto']['name']);
                } else {
                    move_uploaded_file($_FILES['prodphoto']['tmp_name'], $pathToDir . '/' . time() . '_' . $_FILES['prodphoto']['name']);
                }


                $arrProd[] = $userLogin;
                $arrProd[] = $_POST['prodarticle'];
                $arrProd[] = $_POST['prodname'];
                $arrProd[] = $_POST['prodprice'];
                $arrProd[] = $_POST['proddesc'];
                $arrProd[] = $_POST['prodcategory'];

            } else {
                echo "Одно из полей не заполнено ...";
            }

        }
    }



}