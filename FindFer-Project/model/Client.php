<?php
require_once 'User.php';
require_once 'Connection.php';
require_once 'Account.php';
require_once 'Coordinate.php';
Class Client implements User{
        private $idClient;
        private $name;
        private $qualification;
        private $account;
        private $coordinates;
        private $marketers;
        private $media;
        private $connection;
                function __construct($name, $coordinates) {
            $this->name=$name;
            $this->coordinates = $coordinates;
            $this->connection = new Connection();
        }
        function getIdClient(){
            return $this->idClient;
        }
        function setidClient($id){
            $this->idClient=$id;
        }
        function getName(){
            return $this->name;
        }
        function setName($name){
            $this->name = $name;
        }
        function getQualification(){
            return $this->qualification;
        }
        function setQualification($qualification){//TODO - Refactory Tornar atributo qualificação em um classe e uma tabela no DB
            $this->qualification = $qualification;
        }
        function getAccount(){
            return $this->account;
        }
        function setAccount($account){
            $this->account = $account;
        }
                
        function getMarketer(){//Lista de Feirantes
            return $this->marketers;
        }
        function setMarketer($marketer){//Implementação de Lista
            $this->marketers=$marketer;
        }
        function getMedia(){
            return $this->media;
        }
        function setMedia($media){
            $this->media=$media;
        }

        public function registerUser() {
            $this->connection->connect();
            
           
            //return $this->name;
	}
        function listClient($columns){
            $this->connection->connect();
             
            return $list;
        }


        public function requestRelationship() {
		return NULL;
	}

        public function changeAccount() {

        }

}
