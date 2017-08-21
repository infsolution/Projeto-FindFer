<?php
require_once 'Connection.php';
require_once 'Media.php';
require_once 'Coupon.php';
class Poster extends Connection{
    private $idPoster;
    private $title;
    private $description;
    private $value;
    private $dateTime;
    private $coupon;
    private $medias;
    function __construct($title) {
        parent::__construct();
        $this-> title= $title;
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
    function newPoster(){
        $poster = array('title'=>  $this->title,'description'=>  $this->description, 'value'=>  $this->value
                ,'date_time'=> $this->dateTime);
        $this->insert('poster', $poster);
    }
    
    function getPosters(){
        
    }
            
    function toString(){
        
    }



}