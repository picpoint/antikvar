<?php


namespace App\Models;


class Db
{

    public function __construct()
    {
        $config = require __DIR__ . '/../../config.php';
        $this->cnnct = new \PDO("mysql:host=localhost;dbname=antikvar", "rmtar", "2203");
    }


    public function execute() {

    }


}