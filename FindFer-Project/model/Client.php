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
        function setQualification($qualification){
            $this->qualification = $qualification;
        }
        function getAccount(){
            return $this->account;
        }
        function setAccount($account){
            $this->account = $account;
        }
                
        function getMarketer(){//Lista de Feirantes
            $this->marketers=[];
            $data = $this->connection->select('relationship','WHERE id_client='.$this->idClient);
            if(!$data){
                $data = array('id_relationship'=>0,'id_marketer'=>0,'id_client'=>0,'date_relationship'=>'0000-00-00');
            }
            foreach ($data as $value) {
                $this->marketers[]=$value;
            }
            return $this->marketers;
        }
        function addMarketer($marketer){//Implementação de Lista
            
        }
        function getMedia(){
            return $this->media;
        }
        function setMedia($media){
            $this->media=$media;
        }

        public function registerUser() {//Usa a funçao insert de Connection -- Exclusivo de User
            $client = array('name_user' => $this->name, 'id_conta' => 1,
                            'qualification' => 0, 'id_media' =>  $this->media,
                            'id_coordinate' =>  $this->coordinates);
            $this->connection->insert('user', $client);
            
	}
        function listMarketer(){
             $marketer = $this->connection->select('user');
            return $marketer;
        }


        public function requestRelationship($idUser) {//Exclusivo de User
            $date = date("Y-m-d");
            $data = array('id_marketer'=>$idUser, 'id_client'=>  $this->idClient,'date_relationship'=>$date);
            $this->connection->insert('relationship', $data);
	}

        public function changeAccount($newAccount) {//Usa a Função Update de Connection -- Exclusivo de User
            $data = array("id_conta"=>$newAccount);
            $this->connection->update('user', $data," id_user = ".$this->idClient);
        }
        function ToString(){
            return "Nome: ".$this->name." Qualificação: ".$this->qualification."<br/>";
        }

}
