<?php
class Poster{
    private $idPoster;
    private $title;
    private $description;
    private $product;
    private $dateTime;
    private $coupon;
    function __construct($title) {
        $this->title= $title;
    }
}