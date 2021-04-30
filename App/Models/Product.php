<?php

namespace App\Models;

use App\Models\Db;


/**
 * класс модель товаров
 */
class Product extends Model
{

    public $articule;
    public $name;
    public $price;
    public $description;
    public $category;

    public static $table = 'products';



}