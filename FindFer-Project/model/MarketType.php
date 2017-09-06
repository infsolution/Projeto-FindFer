<?php
require_once 'Connection.php';
class MarketType extends Connection{
    private $idType;
    private $name;
    private $description;
    function __construct($name) {
        parent::__construct();
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
        $this->idClient=$description;
    }

    function newTypeMarket(){
        $typeMarket = array('name'=>  $this->name,'description'=>  $this->description);
        $this->insert('type_market', $typeMarket);
    }

    function loadType($params){
        return $this->select('*',$params);
    }

    public function getQuery($fields, $params) {
        return "SELECT {$fields} FROM type_market WHERE {$params}";
    }

}

