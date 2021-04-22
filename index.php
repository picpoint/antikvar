<?php

require __DIR__ . '/autoload.php';

use App\Controllers\Index;


$route = $_SERVER['REQUEST_URI'];



if($route == '/') {
    $page = new Index();
    $page->actionIndex();
} elseif ($route == '/about') {
    $page = new Index();
    $page->actionAbout();
} elseif ($route == '/registration') {
    $page = new Index();
    $page->actionRegistration();
}






