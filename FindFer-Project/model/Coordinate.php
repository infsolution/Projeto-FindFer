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

    public function getQuery($table, $params, $fields) {
        
    }

}