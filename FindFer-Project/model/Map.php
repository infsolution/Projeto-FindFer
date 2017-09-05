<?php
require_once 'Connection.php';
Class Map extends Connection{
    private $map;
    private $name;
    private $marketplace;
    private $markets;
    private $perimeter;
            
    function __construct(){
        parent::__construct();
    }
    function getMap(){
        return $this->map;
    }    
    function getName() {
        return $this->name;
    }            
    function getMarkets(){
        $this->markets = new Market();
        return $this->markets->loadMarket('id_map = '.$this->map);
    }
    function getPerimeter(){
        return $this->perimeter;
    }
    function getMarketplace(){
        return $this->marketplace;
    }
    function setMap($map) {
        $this->map = $map;
    }  
    function setName($name) {
        $this->name = $name;
    }        
    function setMarkets($markets) {
        $this->markets = $markets;
    }
    function setPerimeter($perimeter) {
        $this->perimeter = $perimeter;
    }
    function setMarketplace($marketplace) {
        $this->marketplace = $marketplace;
    }
    function generateMap($params){
        $data = $this->select('*',$params);
        if(!$data){
            return array();
        }
        foreach ($data as $value) {
            $this->markets[]=$value;
        }
            return $this->markets;
    }
    function newMap(){
        $map = array('name'=> $this->name,'marketplace'=>  $this->marketplace,
                    'id_perimeter'=>  $this->perimeter);
        $this->insert('map', $map);
    }
    function loadMap($params){
        return $this->select("*", $params);
    }

    public function getQuery($fields, $params) {
        if($params){
            return "SELECT {$fields} FROM map WHERE {$params}";
        }
        return "SELECT * FROM map";
    }
}