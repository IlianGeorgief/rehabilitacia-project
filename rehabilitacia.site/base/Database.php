<?php

class Database
{
    private $user = 'rehbase';
    private $pass = 'JhyuEQwFDg9E2tK4';
    private $conn;

    public function __construct($database = 'rehabilitation')
    {
        $this->connect($database);
    }

    public function connect($database)
    {
        try {
            $this->conn = new PDO(
                'mysql:host=localhost;dbname='.$database,
                $this->user,
                $this->pass,
                [
                    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
                ]);
        } catch( Exception $e) {
            echo $e->getMessage();
        }
    }

    public function getDB()
    {
        return $this->conn;
    }

    public function query($sql)
    {
        return $this->conn->query($sql);
    }
}