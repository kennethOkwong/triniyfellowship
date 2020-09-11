<?php

class Database
{
    private $connection;

    public function __construct($host, $username, $password, $dbName)
    {
        try {
            $this->connection = new PDO("mysql:host=$host;dbname=$dbName;charset=utf8", $username, $password);
        } catch (PDOException $e) {

            $this->connection = null;
        }
    }

    public function query($sql)
    {
        return $this->connection->query($sql);
    }

    public function prepare($stmt)
    {
        return $this->connection->prepare($stmt);
    }

    public function lastInsertId()
    {
        return $this->connection->lastInsertId();
    }
}