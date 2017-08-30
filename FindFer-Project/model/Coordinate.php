<?php

Class Coordinate extends Connection{
        private $idCoordinate;
        private $longitude;
	private $latitude;
        function __construct($longitude, $latitude) {
            parent::__construct();
            $this->longitude = $longitude;
            $this->latitude = $latitude;
        }
        function getLongitude(){
            return $this->longitude;
        }
        function getLatitude(){
            return $this->latitude;
        }
        function setIdCoordinate($idCoordinate) {
            $this->idCoordinate = $idCoordinate;
        }

        function setLongitude($longitude) {
            $this->longitude = $longitude;
        }

        function setLatitude($latitude) {
            $this->latitude = $latitude;
        }

        function newCoordinate(){
            $coordinate = array('latitude'=>  $this->latitude, 'longitude'=>  $this->longitude);
            $this->insert('coordinate', $coordinate);
        }

        function editCoordinate($latitude, $longitude){
            $coordinate = array('latitude'=>$latitude,'longitude'=>$longitude);
            $this->update('coordinate', $coordinate, "id_coordinate={$this->idCoordinate}");
        }
                
        function loadCoordinates($params){
            return $this->select($params);
        }
        public function getQuery($params) {
            if(is_array($params)){
                return "SELECT {$params['fields']} FROM coordinate WHERE {$params['colunm']}={$params['value']}";
            }
            return "SELECT {$params} FROM coordinate";
        }

}