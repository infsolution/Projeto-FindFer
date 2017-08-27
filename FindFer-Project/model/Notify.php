<?php
class Notify extends Connection{
    private $idNotify;
    private $dateNotify;
    private $idDestinatio;
            
    function __construct() {
        parent::__construct();
    }
    function getIdNotify() {
        return $this->idNotify;
    }

    function getDateNotify() {
        return $this->dateNotify;
    }

    function getIdDestinatio() {
        return $this->idDestinatio;
    }

    function setIdNotify($idNotify) {
        $this->idNotify = $idNotify;
    }

    function setDateNotify($dateNotify) {
        $this->dateNotify = $dateNotify;
    }

    function setIdDestinatio($idDestinatio) {
        $this->idDestinatio = $idDestinatio;
    }

    public function getQuery($table, $params, $fields) {
        
    }

}