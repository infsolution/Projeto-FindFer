<?php

Class Sale{
        private $idSale;
        private $products;
	private $marketer;
	private $client;
	private $value;
	private $date;
	function __construct($client, $marketer) {
            $this->client = $client;
            $this->marketer = $marketer;
        }
}