<?php
require_once 'User.php';
require_once 'Connection.php';
require_once 'Account.php';
require_once 'Coordinate.php';
Class Client extends Connection implements User{
        private $idClient;
        private $name;
        private $qualification;
        private $account;
        private $coordinates;
        private $marketers;
        private $media;
        private $notify;
        function __construct($name, $coordinates) {
            parent::__construct();
            $this->name=$name;
            $this->coordinates = $coordinates;
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
                
        function getMarketer(){
            $this->marketers=[];
            $data = $this->select('relationship','WHERE id_client='.$this->idClient);
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
        function getNotify() {
            $data = $this->select('notify', 'WHERE id_destinate = '.$this->idClient);
            if(!$data){
                return array('id_notify'=>0,'date-notify'=>'0000-00-00','id_destinate'=>0,'id_emissor'=>0,'message'=>'Not notify','visibility'=>1);
            }
            foreach ($data as $value) {
                $this->notify[]=$value;
            }
            return $this->notify;
        }

        function setNotify($notify) {
            $this->notify = $notify;
        }
        
        public function registerUser() {//Usa a funçao insert de Connection -- Exclusivo de User
            $client = array('name_user' => $this->name, 'id_conta' => 1,
                            'qualification' => 0, 'id_media' =>  $this->media,
                            'id_coordinate' =>  $this->coordinates);
            $this->insert('user', $client);
            
	}
        function listMarketer($params){
             return $this->select($params);
        }
        
        
        public function requestRelationship($idUser) {
            $date = date("Y-m-d");
            $data = array('id_marketer'=>$idUser, 'id_client'=>  $this->idClient,'date_relationship'=>$date,'status'=>1);
            $this->insert('relationship', $data);
            $this->update('request_relationship', array('visibilite'=>0),"id_client = {$this->idClient} and id_marketer = {$idUser}");
	}
        function changeAccount($newAccount){
            $this->update('user', array('id_account'=>$newAccount,'id_coordinate'=>$this->coordinates),"id_user = {$this->idClient}");
        }
        function getQuery($params) {
            $params = ($params)?" {$params}":null;
            return "SELECT {$fields} FROM {$table}{$params}";
        }
        function toString(){
            return "Nome: ".$this->name." Qualificação: ".$this->qualification."<br/>";
        }
        
}
