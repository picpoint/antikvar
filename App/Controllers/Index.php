<?php


namespace App\Controllers;

use App\Controllers\View;



class Index
{

    public function actionIndex() {
        $page = new View();
        $page->display('Views/index.php');
    }

    public function actionRegistration() {
        $page = new View();
        $page->display('Views/registration.php');
    }

    public function actionAuthorization() {
        $page = new View();
        $page->display('Views/authorization.php');
    }

    public function actionPersonalPage() {
        $page = new View();
        $page->display('Views/personalPage.php');
    }


    public function actionExit() {
        $page = new View();
        $page->display('Views/exit.php');
    }


    public function actionPageNotFound() {
        $page = new View();
        $page->display('Views/404.php');
    }




}