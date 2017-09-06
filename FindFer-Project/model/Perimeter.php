<?php
class Perimeter extends Connection{
    private $perimeter;
    private $coordinates;
    private $local;
    function __construct($coordinates, $local) {
        parent::__construct();
        $this->coordinates = $coordinates;
        $this->local=$local;
    }
    function getPerimeter() {
        return $this->perimeter;
    }
    function getCoordinates() {
        return $this->coordinates;
    }
    function getLocal() {
        return $this->local;
    }
    function setPerimeter($perimeter) {
        $this->perimeter = $perimeter;
    }
    function setCoordinates($coordinates) {
        $this->coordinates = $coordinates;
    }
    function setLocal($local) {
        $this->local = $local;
    }    
    function newPerimeter($coordinates){
        foreach ($coordinates as $value) {
            $perimeter = array('id_coordinate'=>  $value,'id_local'=> $this->local);
            $this->insert('perimeter', $perimeter);
        }
        
    }        
    function loadPerimeter($params){
        return $this->select('*',$params);
    }
    public function getQuery($fields, $params) {
        if($params){
            return "SELECT {$fields} FROM perimeter  WHERE {$params}";
        }
        return "SELECT * FROM perimeter";
    }

}