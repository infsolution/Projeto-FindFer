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
        function getIdProduct() {
            return $this->idProduct;
        }

        function getName() {
            return $this->name;
        }

        function getValue() {
            return $this->value;
        }

        function getMedia() {
            return $this->media;
        }

        function setIdProduct($idProduct) {
            $this->idProduct = $idProduct;
        }

        function setName($name) {
            $this->name = $name;
        }

        function setValue($value) {
            $this->value = $value;
        }

        function setMedia($media) {
            $this->media = $media;
        }


        
}

?>