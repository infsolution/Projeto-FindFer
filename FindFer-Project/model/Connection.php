<?php
abstract class Connection{
    private $user;
    private $password;
    private $db;
    private $server;
    private static $pdo;
    protected $sql;
    protected $columnValues;
    public function __construct(){
        $this->server = "localhost";
        $this->db = "findferdb";
        $this->user = "root";
        $this->password = "ffapp2017ffapp";
    }
    
    public function connect(){
        try {
            if (is_null(self::$pdo)) {
                self::$pdo = new PDO("mysql:host=".$this->server.";dbname=".$this->db, $this->user, $this->password);
                self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            
            return self::$pdo;
            
        } catch (\PDOException $ex) {
            echo $ex->getMessage();
        }
    }
    function closeConnection(){
        self::$pdo=NULL;
    }

    function execute($query){
        $link=  $this->connect();
        $link->exec($query);
        $this->closeConnection();
        return $link->lastInsertId();
    }
    function insert($table, array $data){
        //$data =  $this->escape($data);
        $fields = implode(',',  array_keys($data));
        $values= "'".implode("', '", $data)."'";
        $query="INSERT INTO {$table}({$fields}) VALUES ({$values})";
        return $this->execute($query);
    }
    function update($table, array $data, $where = null){
        foreach ($data as $key => $value) {
            $fields[]="{$key}='{$value}'";
        }
        $fields = implode(', ', $fields);
        $where = ($where)?" WHERE {$where}":null;
        $query = "UPDATE {$table} SET {$fields}{$where}";
        return $this->execute($query);
    }
    function delete($table,$where){
        $where=($where)?" where {$where}":null;
        $query = "DELETE FROM {$table}{$where}";
        return $this->execute($query);
    }
    function select($fields,$params){
        $query = $this->getQuery($fields,$params);
        $link = $this->connect();
        $result = $link->query($query)->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    abstract function getQuery($fields,$params);
}