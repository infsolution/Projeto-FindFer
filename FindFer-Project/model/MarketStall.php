<?php
class MarketStall{
    private $idMarketStall;
    private $name;
    private $marketer;
    private $coordinates;
    private $media;
    function __construct($name="MarketStall") { //TODO - MarketStall deve ter um ID no construtor? (Pra evitar Invalid State)
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
}

