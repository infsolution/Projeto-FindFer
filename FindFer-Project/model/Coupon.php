<?php
require_once 'Connection.php';
class Coupon extends Connection{
    private $idCoupon;
    private $code;
    private $value;
    private $validity;
    function __construct($validity, $value) {
        parent::__construct();
        $this->validity = $validity;
        $this->value= $value;
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

    public function getQuery($params) {
        
    }

}

