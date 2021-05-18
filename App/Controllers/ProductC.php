<?php

namespace App\Controllers;
use App\Models\Product;

class ProductC
{

    public function showLots() {
        $user = $_SESSION['login'];

        $datas = new Product();
        $res = $datas->showLots();

        foreach ($res as $rs) {

            echo "<div class=\"pp__lot\">
              <img src='/../public/usersFolders/$user/$rs->photo' alt='$rs->photo'>
              <span>$rs->articule</span>
              <span>$rs->name</span>
              <span>$rs->price</span>
              <span>$rs->category</span>
            </div>";

        }

    }

}