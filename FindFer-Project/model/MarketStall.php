<?php
require_once 'Connection.php';
class MarketStall extends Connection{
    private $idMarketStall;
    private $name;
    private $marketer;
    private $market;
    private $coordinates;
    private $media;
    function __construct($name) {
        parent::__construct();
        $this->name = $name;
    }
    function getIdMarketStall(){
        return $this->idMarketStall;
    }
    function setidMarketStall($id){
        $this->idMarketStall=$id;
    }
    function getName(){
        return $this->name;
    }
    function setName($name){
        $this->name=$name;
    }
    function getMarketer(){
        return $this->idClient;
    }
    function getMarket() {
        return $this->market;
    }
    
    function setMarketer($marketer){
        $this->marketer=$marketer;
    }
    function getCoordinates(){
        return $this->coordinates;
    }
    function setCoordinates($coordinates){
        $this->coordinates=$coordinates;
    }
    function getMedia(){
        return $this->idClient;
    }
    function setMedia($media){
        $this->media=$media;
    }
    public function registerMarketStall() {
            $marketStall = array('name' => $this->name,'id_marketer' => $this->marketer, 
                'id_coordinate' =>  $this->coordinates,'media' =>  $this->media,
                'id_market'=>  $this->market);
            $this->insert('market_stall', $marketStall);
            
	}
    function editMarketStall(){
        $marketStall = array('name'=>$this->name,'id_coordinate'=>  $this->coordinates, 'id_midia'=>  $this->media);
        $this->update('market_stall', $marketStall, "id_market_stall={$this->idMarketStall}");
    } 
    function loadMarketStall($params){
        return $this->select('*',$params);
    }
            
    function getQuery($fields, $params){
        if($params){
            return "SELECT {$fields} FROM market_stall WHERE {$params}";
        }
        return "SELECT * FROM market_stall";
        }
}

