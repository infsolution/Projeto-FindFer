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
}