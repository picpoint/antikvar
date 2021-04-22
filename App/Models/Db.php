<?php


namespace App\Models;


class Db
{

    public function __construct()
    {
        $config = require __DIR__ . '/../../config.php';
        $sth = $this->cnnct = new \PDO("mysql:host=localhost;dbname=antikvar", "rmtar", "2203");
        $sth -> prepare($sql);
        return $sth -> execute();
    }

}