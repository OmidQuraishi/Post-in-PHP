<?php


class Database
{
    public $connection;
    public function __construct()
    {
        $config = require "../config.php";
        $dns = 'mysql:' . http_build_query($config, '', ';');

        $this->connection = new PDO($dns, $user =  "root", $password = "", [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }
    public function query($query, $parameters = [])
    {
        $statament = $this->connection->prepare($query);
        $statament->execute($parameters);
        return $statament;
    }
}
