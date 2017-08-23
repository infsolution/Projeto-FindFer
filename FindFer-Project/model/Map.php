<?php
require_once 'Connection.php';
Class Map extends Connection{
    private $markets;
    function __construct() {
        parent::__construct();
    }

    function getMarkets() {
        return $this->markets;
    }
    function setMarkets($markets) {
        $this->markets = $markets;
    }
    function generateMap(){
        $data = $this->select('market', $params, $fields);
        if(!$data){
            return array();//TODO nullObject
        }
        foreach ($data as $value) {
                $this->markets[]=$value;
        }
        return $this->markets;
    }


    


    
}