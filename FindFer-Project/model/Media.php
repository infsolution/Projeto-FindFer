<?php
require_once 'Connection.php';
class Media extends Connection{
    private $idMedia;
    private $name;
    private $path;
    private $type;
    private $owner;
    function __construct($name, $path) {
        parent::__construct();
        $this->name = $name;
        $this->path = $path;
    }
    
    function toString(){
        return "{$this->path}/{$this->name}";
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
    function getOwner() {
        return $this->owner;
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
    function setOwner($owner) {
        $this->owner = $owner;
    }    
    function newMedia($idOwner){
        $media = array('name_media'=>  $this->name,'path_media'=>  $this->path,'id_media_type'=>  $this->type,'id_owner'=>$idOwner);
        $this->insert('media', $media);
    }
    function upDateMedia($name,$newPath,$type){
        $media = array('name_media'=>$name,'path_media'=>$newPath,'id_media_type'=>$type);
        $this->update('media', $media, 'id_media = '.$this->idMedia);
    }

    function loadMedia($params){
        return $this->select($params);
    }

    public function getQuery($params) {
        return "SELECT * FROM media WHERE id_owner={$params}";
    }

}