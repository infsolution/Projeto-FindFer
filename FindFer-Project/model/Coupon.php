<?php
require_once 'Connection.php';
require_once '../control/timezone/TimeZone.php';
class Coupon extends Connection{
    private $idCoupon;
    private $code;
    private $value;
    private $validity;
    function __construct($validity, $value) {
        parent::__construct();
        $this->validity = $validity;
        $this->value= $value;
        new TimeZone();
    }
    function getIdCoupon() {
        return $this->idCoupon;
    }

    function getCode() {
        return $this->code;
    }

    function getValidity() {
        return $this->validity;
    }
    
    function getValue() {
        return $this->value;
    }

    function setIdCoupon($idCoupon) {
        $this->idCoupon = $idCoupon;
    }

    function setCode($code) {
        $this->code = $code;
    }

    function setValidity($validity) {
        $this->validity = $validity;
    }
    function setValue($value) {
        $this->value = $value;
    }
    function newCoupon(){
        $this->code = $this->createCode();
        $coupon = array('code'=>  $this->code,'value'=> $this->value,'validity'=>  $this->validity);
        $this->insert('coupon', $coupon);
    }
    function createCode(){//TODO
        return $code;
    }
            
    function toString(){
        
    }
    function loadCoupon($code){
       return $this->select('coupon','*',$code);
    }


    public function getQuery($table, $fields='*', $params=NULL) {
        return "SELECT {$fields} FROM {$table} WHERE {$params}";
    }

}

