<?php
class Perimeter extends Connection{
    private $idPerimeter;
    private $coordinates;
    function __construct($coordinates) {
        parent::__construct();
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