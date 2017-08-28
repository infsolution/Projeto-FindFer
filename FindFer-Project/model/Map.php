<?php
require_once 'Connection.php';
Class Map extends Connection{
    private $marketplace;
    private $markets;
    private $perimeter;
            
    function __construct() {
        parent::__construct();
    }

    function getMarkets() {
        return $this->markets;
    }
    function setMarkets($markets) {
        $this->markets = $markets;
    }
    function getPerimeter() {
        return $this->perimeter;
    }

    function setPerimeter($perimeter) {
        $this->perimeter = $perimeter;
    }
    function getMarketplace() {
        return $this->marketplace;
    }

    function setMarketplace($marketplace) {
        $this->marketplace = $marketplace;
    }

    function generateMap(){
        $data = $this->select($params, $fields);
        if(!$data){
            return array();//TODO nullObject
        }
        foreach ($data as $value) {
            $this->markets[]=$value;
        }
            return $this->markets;
    }

    public function getQuery($params, $fields) {
        return "SELECT {$fields} FROM map {$params}";
    }

}