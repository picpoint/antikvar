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
            print_r($_FILES);
        }
    }



}