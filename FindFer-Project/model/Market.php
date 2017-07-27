<?php

Class Market{
        private $idMarket;
        private $name;
        private $description;
        private $marketer;
	private $perimeter;
        private $marketStalls;
        function __construct($name) {
            $this->name = $name;
        }
}