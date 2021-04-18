<?php

require __DIR__ . '/autoload.php';

use App\Controllers\Index;


$route = $_SERVER['REQUEST_URI'];




$indexP = new Index();
$indexP->actionIndex();


