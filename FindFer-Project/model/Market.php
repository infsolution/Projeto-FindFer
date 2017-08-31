<?php

Class Market extends Connection{
        private $idMarket;
        private $name;
        private $description;
	private $perimeter;
        private $marketStalls;
        private $map;
        function __construct($name) {
            parent::__construct();
            $this->name = $name;
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
            return $this->marketStalls;
        }

        function getMap() {
            return $this->map;
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
        
        function newMarket(){
            $market = array('name'=>  $this->name, 'description'=>  $this->description,'id_perimeter'=>  $this->perimeter,'id_map'=>  $this->map);
            $this->insert('market', $market);
        }
        function loadMarket($params){
            return $this->select($params);
        }    
        function getQuery($table, $fields = '*', $params=NULL) {
            return "SELECT {$params} FROM market";
        }
        function toString(){
            return $this->name;
        }
}