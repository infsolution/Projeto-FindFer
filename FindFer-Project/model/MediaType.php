<?php
class MediaType{
    private $idType;
    private $name;
    function __construct($name) {
        $this->name = $name;
    }
    function getIdType() {
        return $this->idType;
    }

    function getName() {
        return $this->name;
    }

    function setIdType($idType) {
        $this->idType = $idType;
    }

    function setName($name) {
        $this->name = $name;
    }


}
