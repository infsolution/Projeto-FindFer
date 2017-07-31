<?php

class Connection
{
    private $user;
    private $password;
    private $db;
    private $server;
    private static $pdo;
    
    public function __construct(){
        $this->servido = "localhost";
        $this->banco = "findfer";
        $this->usuario = "root";
        $this->senha = "";
    }
    
    public function connect(){
        try {
            if (is_null(self::$pdo)) {
                self::$pdo = new PDO("mysql:host=".$this->server.";dbname=".$this->db, $this->user, $this->password);
            }
            
            return self::$pdo;
            
        } catch (\PDOException $e) {
            echo $ex->getMessage();
        }
    }
}

