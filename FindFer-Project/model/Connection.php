<?php
class Connection{
    private $user;
    private $password;
    private $db;
    private $server;
    private static $pdo;
    protected $sql;
    protected $criteria;
    protected $entity;
    protected $columnValues;
    public function __construct(){
        $this->servido = "localhost";
        $this->banco = "findferdb";
        $this->usuario = "root";
        $this->senha = "ffapp2017ffapp";
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
    final function setEntity($entity){
        $this->entity=$entity;
    }
    
    final function getEntity(){
        return $this->entity;
    }
    
    function setCriteria(Criteria $criteria){
        $this->criteria=$criteria;
    }
    function setRowData($column, $value){
        if(is_string($value)){
            $value = addslashes($value);
            $this->columnValues[$column] = "'$value'";
        }
        elseif (is_bool($value)) {$this->columnValues[$column] = $value ? 'TRUE':'FALSE';}
        elseif(isset ($value)){$this->columnValues[$column] = $value;}
        else{$this->columnValues[$column] = NULL;}
    }
    function set_Criteria(Criteria $criteria) {//TODO ver necessidade do método
        throw new Exception("Cannot call setCriteria from".__CLASS__);
    }
    function insert() {
        $this->sql = "INSERT INTO {$this->entity} (";
        $columns = implode(", ", array_keys($this->columnValues));
        $values = implode(', ', array_values($this->columnValues));
        $this->sql .= $columns.')';
        $this->sql .="VALUES ({$values})";
        return $this->sql;
    }
    function select($columns){
        $this->sql = 'SELECT ';
        $this->sql .= implode(', ', $columns);
        $this->sql .= ' FROM '.$this->entity;
        if($this->criteria){
            $expression = $this->criteria->dump();
            if($expression){$this->sql .= ' WHERE '.$expression;}
            $order = $this->criteria->getProperty('order');
            $limit = $this->criteria->getProperty('limit');
            $offset = $this->criteria->getProperty('offset');
            if($order){$this->sql .= ' ORDER BY ' . $order;}
            if($limit){$this->sql .= ' LIMIT ' . $limit;}
            if($offset){$this->sql .= ' OFFSET '. $offset;}
        }
        return $this->sql;
    }
    function upDate(){
        $this->sql="UPDATE {$this->entity}";
        if($this->columnValues){
            foreach ($this->columnValues as $column => $value) {
                $set[]="{$column}={$value}";
            }
        }
        $this->sql .= ' SET ' . implode(', ', $set);
        if($this->criteria){
            $this->sql .= ' WHERE ' . $this->criteria->dump();
        }
        return $this->sql;
    }
    function delete(){
        if($this->criteria){
            $expression = $this->criteria->dump();
            if($expression){
                $this->sql .= ' WHERE ' . $expression;
            }
        }
        return $this->sql;
    
    
}

}