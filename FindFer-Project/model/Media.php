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
    
}