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


    /**
     * Метод для загрузки картинки в папки пользователей и сохранение записи в БД
     */
    public function uploadProduct() {
        if (isset($_POST['uploadprod'])) {
            $arrProd = [];
            $file = $_FILES;

            if (!empty($file['prodphoto']['size']) && $file['prodphoto']['error'] == 0 && !empty($_POST['prodarticle']) && !empty($_POST['prodname']) && !empty($_POST['prodprice']) && !empty($_POST['proddesc']) && !empty($_POST['prodcategory'])) {
                $userLogin = $_SESSION['login'];
                $pathToDir = __DIR__. '/../../public/usersFolders/' . $userLogin;
                $namePhoto = time() . '_' . $_FILES['prodphoto']['name'];

                $arrProd[] = $userLogin;
                $arrProd[] = $_POST['prodarticle'];
                $arrProd[] = $_POST['prodname'];
                $arrProd[] = $_POST['prodprice'];
                $arrProd[] = $_POST['proddesc'];
                $arrProd[] = $_POST['prodcategory'];
                $arrProd[] = $namePhoto;

                if (!file_exists($pathToDir)) {
                    mkdir($pathToDir, 0777);
                    move_uploaded_file($_FILES['prodphoto']['tmp_name'], $pathToDir . '/' . $namePhoto);
                } else {
                    move_uploaded_file($_FILES['prodphoto']['tmp_name'], $pathToDir . '/' . $namePhoto);
                }

                Model::insert($arrProd, static::$table);

            } else {
                echo "Одно из полей не заполнено ...";
            }

        }
    }



}


