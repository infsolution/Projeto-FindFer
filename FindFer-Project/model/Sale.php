<?php

Class Sale extends Connection{
        private $idSale;
        private $products;
	private $marketer;
	private $client;
	private $value;
	private $date;
	function __construct($client, $marketer) {
            parent::__construct();
            $this->client = $client;
            $this->marketer = $marketer;
        }
        function getIdSale() {
            return $this->idSale;
        }

        function getProducts() {
            return $this->products;
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

        function getDate() {
            return $this->date;
        }

        function setIdSale($idSale) {
            $this->idSale = $idSale;
        }

        function setProducts($products) {
            $this->products = $products;
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

        function setDate($date) {
            $this->date = $date;
        }


}