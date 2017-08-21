<?php
class Coupon extends Connection{
    private $idCoupon;
    private $code;
    private $dateTime;
    private $value;
    function __construct($code) {
        parent::__construct();
        $this->code = $code;
    }
}

