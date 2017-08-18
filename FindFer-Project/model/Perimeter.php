<?php
class Perimeter{
    private $idPerimeter;
    private $coordinates;
    function __construct($coordinates) {
        $this->coordinates = $coordinates;
    }
    function getIdPerimeter() {
        return $this->idPerimeter;
    }

    function getCoordinates() {
        return $this->coordinates;
    }

    function setIdPerimeter($idPerimeter) {
        $this->idPerimeter = $idPerimeter;
    }

    function setCoordinates($coordinates) {
        $this->coordinates = $coordinates;
    }


}