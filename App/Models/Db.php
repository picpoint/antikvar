<?php


namespace App\Models;


class Db
{

    public function __construct()
    {
        $config = (require __DIR__ . '/../../config.php')['db'];
        $this->cnnct = new \PDO("mysql:host=" . $config['host'] . ";dbname=" . $config['dbname'], $config['user'], $config['password']);
    }


    public function execute(string $sql) {
        $sth = $this->cnnct -> prepare($sql);
        return $sth -> execute();
    }


}