<?php


namespace App\Controllers;

use App\Controllers\View;



class Index
{

    public function actionIndex() {
        $page = new View();
        $page->display('Views/index.php');
    }

    public function actionAbout() {
        $page = new View();
        $page->display('Views/about.php');
    }

    public function actionRegistration() {
        $page = new View();
        $page->display('Views/registration.php');
    }




}