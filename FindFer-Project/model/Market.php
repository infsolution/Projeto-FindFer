<?php

Class Market extends Connection{
        private $idMarket;
        private $name;
        private $description;
        private $marketer;
	private $perimeter;
        private $marketStalls;
        function __construct($name) {
            parent::__construct();
            $this->name = $name;
        }
}