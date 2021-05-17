<?php


namespace App\Models;


/**
 * Класс для работы с БД напрямую
 */
class Db
{

    protected $cnnct;


    public function __construct()
    {
        $config = (require __DIR__ . '/../../config.php')['db'];
        $this->cnnct = new \PDO("mysql:host=" . $config['host'] . ";dbname=" . $config['dbname'], $config['user'], $config['password']);
    }


    /**
     * метод получения всех записей из БД
     */
    public function getData(string $sql, $class) {
        $sth = $this->cnnct -> prepare($sql);
        $sth -> execute();
        return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
    }


    /**
     * метод сохранения данных в БД
     */
    public function save(string $sql) {
        $sth = $this->cnnct->prepare($sql);
        $sth->execute();
    }





}