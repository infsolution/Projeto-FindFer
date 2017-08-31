<?php
require_once 'Connection.php';
require_once 'Poster.php';
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
            $this->updateSale($poster->getValue()*$quantity);
        }
        function finishSale(){
            $sale = array('status'=>1);
            $this->update('sale', $sale, "id_sale={$this->idSale}");
        }
                
        function updateSale($value){
            $this->value+=$value;
            $sale = array('sale_value'=>  $this->value);
            $this->update('sale', $sale, "id_sale={$this->idSale}");
        }

        public function getQuery($table, $fields = '*', $params=NULL) {
            if(is_array($params)){
                return "SELECT {$params['fields']} FROM {$params['tables']}WHERE {$params['params']}";
            }
            return "SELECT * FROM sale";
        }

}