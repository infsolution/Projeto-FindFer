<?php

Class Map extends Connection{
    private $idMap;
    private $markets;
    function __construct($markets) {
        parent::__construct();
        $this->markets = $markets;
    }
	 
}