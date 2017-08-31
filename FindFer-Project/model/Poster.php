<?php
require_once 'Connection.php';
require_once 'Media.php';
require_once 'Coupon.php';
require_once '../control/timezone/TimeZone.php';
class Poster extends Connection{
    private $idPoster;
    private $title;
    private $description;
    private $value;
    private $dateTime;
    private $coupon;
    private $medias;
    private $marketer;
    private $marketPlace;
    private $params;
    function __construct($marketPlace) {
        parent::__construct();
        new TimeZone();
        $this-> marketPlace = $marketPlace;
    }
            
    function getIdPoster() {
        return $this->idPoster;
    }

    function getTitle() {
        return $this->title;
    }

    function getDescription() {
        return $this->description;
    }
    function getValue() {
        return $this->value;
    }
    function getDateTime() {
        return $this->dateTime;
    }

    function getCoupon() {
        return $this->coupon;
    }
    function getMedias() {
        return $this->medias;
    }
    function getMarketer() {
        return $this->marketer;
    }
        
    function getMarketPlace() {
        return $this->marketPlace;
    }
    
    function setIdPoster($idPoster) {
        $this->idPoster = $idPoster;
    }

    function setTitle($title) {
        $this->title = $title;
    }

    function setDescription($description) {
        $this->description = $description;
    }
    function setValue($value) {
        $this->value = $value;
    }
    
    function setDateTime($dateTime) {
        $this->dateTime = $dateTime;
    }

    function setCoupon($coupon) {
        $this->coupon = $coupon;
    }
    function setMedias($medias) {
        $this->medias = $medias;
    }
    function setMarketer($marketer) {
        $this->marketer = $marketer;
    }
    function setMarketPlace($marketPlace) {
        $this->marketPlace = $marketPlace;
    }
    
    function newPoster(){
        $this->dateTime = date('Y-m-d H:i:s');
        $poster = array('id_marketer'=>$this->marketer, 'title'=>  $this->title,'description'=>  $this->description, 'value'=>  $this->value
                ,'date_time'=> $this->dateTime, 'id_coupon'=>  $this->coupon,'id_market_place'=>$this->marketPlace);
        $this->insert('poster', $poster);
    }
    
    function getListPosters($fields, $params){
       return $this->select('poster',$fields,$params);
    }
    
    function loadPoster(){
        return $this->select('poster','*',$params);
    }

    public function getQuery($table, $fields='*', $params=NULL) {
       if($params){
           return "SELECT {$fields} FROM {$table} WHERE {$params}";
       }
       return "SELECT {$fields} FROM {$table}";
    }
    

}