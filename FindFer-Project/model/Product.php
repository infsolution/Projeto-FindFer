<?php

Class Product extends Connection{
	private $idProduct;
	private $name;
	private $value;
	private $media;
        function __construct($name, $media) {
            parent::__construct();
            $this->name = $name;
            $this->media = $media;
        }
        
}

?>