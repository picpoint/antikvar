<?php

namespace App\Controllers;
use App\Models\Model;
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


    public function showLotsByCategory($category) {

        if (isset($_GET['cat'])) {
            echo $_GET['cat'];
        } else {
            echo "not get";
            die;
        }

        $res = new Product();
        $lotBycategory = $res->showCategory($category);

        foreach ($lotBycategory as $rs) {
            echo "<div class=\"pp__lot\">
                <img src='/../public/usersFolders/$rs->user/$rs->photo' alt='$rs->photo'>
                <span>$rs->articule</span>
                <span>$rs->name</span>
                <span>$rs->price</span>
                <span>$rs->category</span>
            </div>";
        }
    }


    public function showCatalog() {
        $res = new Product();
        $lots = $res->showAllLotsUsers();

        foreach ($lots as $rs) {
            echo "<div class=\"pp__lot\">
                <img src='/../public/usersFolders/$rs->user/$rs->photo' alt='$rs->photo'>
                <span>$rs->articule</span>
                <span>$rs->name</span>
                <span>$rs->price</span>
                <span>$rs->category</span>
            </div>";
        }

    }


}