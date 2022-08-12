<?php

class Database
{
    private $username = "root";
    private $password = "";
    private $database = "pweb_mvc";
    private $connection;

    public function __construct()
    {
        $this->connection = new PDO("mysql:host=localhost;dbname=$this->database", $this->username, $this->password);
    }

    /**
     * @return PDO
     */
    public function getConnection()
    {
        return $this->connection;
    }


}