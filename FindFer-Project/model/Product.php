<?php

Class Product{
	private $idProduct;
	private $name;
	private $value;
	private $media;
        function __construct($name, $media) {
            $this->name = $name;
            $this->media = $media;
        }
        
}

?>