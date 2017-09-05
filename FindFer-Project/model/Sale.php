<?php
require_once 'Connection.php';
require_once 'Poster.php';
require_once 'Coupon.php';
require_once '../control/timezone/TimeZone.php';
Class Sale extends Connection{
    private $idSale;
    private $posters;
    private $marketer;
    private $client;
    private $value;
    private $coupon;
    private $date;
    function __construct($client, $marketer) {
        parent::__construct();
        $this->client = $client;
        $this->marketer = $marketer;
        new TimeZone();
    }
    function getIdSale() {
        return $this->idSale;
    }
    function getPosters() {
        return $this->posters;
    }
    function getMarketer() {
        return $this->marketer;
    }
    function getClient() {
        return $this->client;
    }
    function getValue() {
        return $this->value;
    }
    function getCoupon() {
        return $this->coupon;
    }                
    function getDate() {
        return $this->date;
    }
    function setIdSale($idSale) {
        $this->idSale = $idSale;
    }
    function setPosters($posters) {
        $this->posters = $posters;
    }
    function setMarketer($marketer) {
        $this->marketer = $marketer;
    }
    function setClient($client) {
        $this->client = $client;
    }
    function setValue($value) {
        $this->value = $value;
    }
    function setCoupon($coupon) {
        $this->coupon = $coupon;
    }
    function setDate($date) {
        $this->date = $date;
    }
    function newSale(){
        $sale = array('date_sale'=>date('Y-m-d'),'sale_value'=>0,'id_coupon'=>$this->coupon,
            'id_marketer'=>  $this->marketer, 'id_client'=>$this->client, 'status'=>0);
        $this->insert('sale', $sale);
    }
    function addProduct($quantity, Poster $poster){
        $add = array('id_sale'=>$this->idSale,'id_poster'=>  $poster->getIdPoster(), 'quantity'=>$quantity);
        $this->insert('sale_poster', $add);
        $this->updateSale(0,$poster->getValue()*$quantity);
    }
    function finishSale(){
        $coupon = new Coupon(null, null);
        $coup = $coupon->loadCoupon('id_coupon = '.$this->coupon);
        $this->updateSale(1, $this->value-$coup[0]['value']);
    }                
    function updateSale($status,$value){
        $this->value+=$value;
        $sale = array('status'=>$status, 'sale_value'=>$value);
        $this->update('sale', $sale, "id_sale={$this->idSale}");
    }
    function loadSale($params){
        return $this->select('*', $params);
    }
    public function getQuery($fields, $params) {
        if($params){
            return "SELECT {$fields} FROM  sale WHERE {$params}";
        }
        return "SELECT * FROM sale";
    }

}