<?php
require_once 'Connection.php';
class MarketStall extends Connection{
    private $idMarketStall;
    private $name;
    private $marketer;
    private $coordinates;
    private $media;
    function __construct($name="MarketStall") { //TODO - MarketStall deve ter um ID no construtor? (Pra evitar Invalid State)
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
    public function registerMarketStall() {//Insert
            $mktstall = array('name_mktstall' => $this->name, 'id_mktstall' => $this->idMarketStall,
                            'marketer' => $this->marketer, 'media' =>  $this->media,
                            'id_coordinate' =>  $this->coordinates);
            $this->insert('mktstall', $mktstall);
            
	}
    public function changeAccount($newAccount) {//Update (TODO/A fazer)
            $data = array("id_conta"=>$newAccount);
            $this->update($table, $data," id_user = ".$this->marketer);
        }
    //GetMarketer já tem, com os getters/setters
}

