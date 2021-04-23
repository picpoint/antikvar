<?php


namespace App\Models;


class Db
{
    protected $sth;

    public function __construct()
    {
        $config = (require __DIR__ . '/../../config.php')['db'];
        $this->cnnct = new \PDO("mysql:host=" . $config['host'] . ";dbname=" . $config['dbname'], $config['user'], $config['password']);
    }

    public function execsql($sql) {
        $this->sth = $this->cnnct->prepare($sql);
        return $this->sth->execute();
    }

}