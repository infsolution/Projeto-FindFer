<?php
require_once 'Connection.php';
class MediaType extends Connection{
    private $idType;
    private $name;
    function __construct($name) {
        parent::__construct();
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
    function newMediaType(){
        $type = array('name_type'=>  $this->name);
        $this->insert('media_type', $type);
    }
    function upDatetype($nametype){
        $data = array('name_type'=> $nametype );
        $this->update('media_type', $data, 'id_media_type = '.$this->idType);
    }
    function toString(){
        return $this->name;
    }
    function loadType($fields, $params){
        $res = $this->select($fields,$params);
        if(!$res){
            return array('id_media_type'=>0,'name_type'=>'Nenhum tipo de midia encontrado.');
        }
        return $res;
    }
    public function getQuery($fields, $params) {
        if($params){
            return "SELECT {$fields} FROM media_type WHERE {$params}";
        }
        return "SELECT {$fields} FROM media_type";
        
    }
}
