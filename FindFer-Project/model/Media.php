<?php
class Media{
    private $idMedia;
    private $name;
    private $path;
    private $type;
    function __construct($name, $path) {
        $this->name = $name;
        $this->path = $path;
    }
    
    function toString(){
        return "{$this->path}{$this->name}";
    }
    function getIdMedia() {
        return $this->idMedia;
    }

    function getName() {
        return $this->name;
    }

    function getPath() {
        return $this->path;
    }

    function getType() {
        return $this->type;
    }

    function setIdMedia($idMedia) {
        $this->idMedia = $idMedia;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setPath($path) {
        $this->path = $path;
    }

    function setType($type) {
        $this->type = $type;
    }


}