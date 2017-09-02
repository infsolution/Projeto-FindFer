<?php
require_once 'Connection.php';
class MarketType extends Connection{
    private $idType;
    private $name;
    private $description;
    function __construct($name) {
        $this->name = $name;
    }
    function getidType(){
        return $this->idType;
    }
    function setidType($id){
        $this->idType=$id;
    }
    function getName(){
        return $this->name;
    }
    function setName($name){
        $this->name=$name;
    }
    function getDescription(){
        return $this->description;
    }
    function setDescription($description){
        $this->idClient=$id;
    }

    function newTypeMarket(){
        $typeMarket = array('name'=>  $this->name,'description'=>  $this->description);
        $this->insert('type_market', $typeMarket);
    }

    function loadType($params){
        return $this->select('type_market','*',$params);
    }

    public function getQuery($table, $fields = '*', $params=NULL) {
        return "SELECT {$fields} FROM {$table} WHERE {$params}";
    }

}

