<?php
require_once 'Database.php';

class UserDAO
{
    private $connection;

    public function __construct()
    {
        $Database = new Database();
        $this->connection = $Database->getConnection();
    }

    function store($user) {
        $stmt = $this->connection->prepare("INSERT INTO users (user,password) VALUES (:user, :password) ");
        $stmt->bindValue(':user', $user->getUser());
        $stmt->bindValue(':password', $user->getPassword());
        return $stmt->execute();
    }

}