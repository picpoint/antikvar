<?php

require __DIR__ . '/autoload.php';

use App\Controllers\Index;


$route = $_SERVER['REQUEST_URI'];



if($route == '/') {
    $page = new Index();
    $page->actionIndex();
} elseif ($route == '/registration') {
    $page = new Index();
    $page->actionRegistration();
} elseif ($route == '/authorization') {
    $page = new Index();
    $page ->actionAuthorization();
} elseif ($route == '/personalPage') {
    $page = new Index();
    $page->actionPersonalPage();
} else {
    $page = new Index();
    $page->actionPageNotFound();
}






