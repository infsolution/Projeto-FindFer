<?php
require_once 'Connection.php';
require_once 'MarketStall.php';
Class Market extends Connection{
        private $idMarket;
        private $name;
        private $description;
	private $perimeter;
        private $marketStalls;
        private $map;
        private $marker;
                function __construct() {
            parent::__construct();
        }
        function getIdMarket() {
            return $this->idMarket;
        }

        function getName() {
            return $this->name;
        }

        function getDescription() {
            return $this->description;
        }

        function getPerimeter() {
            return $this->perimeter;
        }

        function getMarketStalls() {
            $this->marketStalls = new MarketStall();
            return $this->marketStalls->loadMarketStall();
        }

        function getMap() {
            return $this->map;
        }
        function getMarker() {
            return $this->marker;
        }        
        function setIdMarket($idMarket) {
            $this->idMarket = $idMarket;
        }

        function setName($name) {
            $this->name = $name;
        }

        function setDescription($description) {
            $this->description = $description;
        }

        function setPerimeter($perimeter) {
            $this->perimeter = $perimeter;
        }

        function setMarketStalls($marketStalls) {
            $this->marketStalls = $marketStalls;
        }

        function setMap($map) {
            $this->map = $map;
        }
        function setMarker($marker) {
            $this->marker = $marker;
        }        
        function loadPerimeter(){
            $this->perimeter = new Perimeter(0, 0);
            return $this->perimeter->loadPerimeter('id_local = '.$this->idMarket);
        }
                
        function newMarket(){
            $market = array('name'=>  $this->name, 'description'=>  $this->description,'id_perimeter'=>  $this->perimeter,
                'id_map'=>  $this->map,'id_coordinate_marker'=>  $this->marker);
            $this->insert('market', $market);
        }
        function loadMarket($params){
            return $this->select('*',$params);
        }    
        function getQuery( $fields, $params) {
            return "SELECT {$fields} FROM market_stall where {$params}";
        }

}