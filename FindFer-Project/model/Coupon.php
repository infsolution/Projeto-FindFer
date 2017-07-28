<?php
class Coupon{
    private $idCoupon;
    private $code;
    private $dateTime;
    private $value;
    function __construct($code) {
        $this->code = $code;
    }
}

