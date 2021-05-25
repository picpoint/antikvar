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


    public function showLotsByCategory() {

        $category = '';

        if (isset($_POST['btnbons'])) {
            $category = 'bons';
        } elseif (isset($_POST['btncoins'])) {
            $category = 'coins';
        } elseif (isset($_POST['btnbooks'])) {
            $category = 'books';
        } elseif (isset($_POST['btnmilitary'])) {
            $category = 'military';
        } elseif (isset($_POST['btnpostmarks'])) {
            $category = 'postmarks';
        } elseif (isset($_POST['btnhandmade'])) {
            $category = 'handmade';
        } elseif (isset($_POST['btnenvelopes'])) {
            $category = 'envelopes';
        } elseif (isset($_POST['btntransport'])) {
            $category = 'transport';
        } elseif (isset($_POST['btnorders'])) {
            $category = 'orders';
        } elseif (isset($_POST['btnhobby'])) {
            $category = 'hobby';
        } elseif (isset($_POST['btnphoto'])) {
            $category = 'photo';
        } elseif (isset($_POST['btnicons'])) {
            $category = 'icons';
        } elseif (isset($_POST['btnceramik'])) {
            $category = 'ceramik';
        } elseif (isset($_POST['btndishes'])) {
            $category = 'dishes';
        } elseif (isset($_POST['btnother'])) {
            $category = 'other';
        } elseif (isset($_POST['btnglass'])) {
            $category = 'glass';
        } elseif (isset($_POST['btninteryer'])) {
            $category = 'interyer';
        } elseif (isset($_POST['btnmaps'])) {
            $category = 'maps';
        } elseif (isset($_POST['btnjewelry'])) {
            $category = 'jewelry';
        } elseif (isset($_POST['btnfurniture'])) {
            $category = 'furniture';
        } elseif (isset($_POST['btntech'])) {
            $category = 'tech';
        } elseif ($category == '') {
            $this->showCatalog();
            return;
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