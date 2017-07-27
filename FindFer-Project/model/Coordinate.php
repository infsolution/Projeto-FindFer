<?php

Class Coordinate{
        private $idCoordinate;
        private $longitude;
	private $latitude;
        function __construct($longitude, $latitude) {
            $this->longitude = $longitude;
            $this->latitude = $latitude;
        }
	
}